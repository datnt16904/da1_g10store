<?php
class Product extends BaseModel
{
    //lấy toàn bộ sản phẩm
    public function all()
    {
        $sql = "SELECT p.*, c.cate_name FROM products p JOIN categories c ON p.category_id=c.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
//Thêm dữ liệu
public function create($data)
{
    $sql = "INSERT INTO products(name, price, quantity, description, category_id, status) VALUES(:name, :price, :quantity, :description, :category_id, :status)";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute($data);
}
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE products SET name=:name, price=:price, quantity=:quantity, description=:description, category_id=:category_id, status=:status WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        //thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }

//lấy ra 1 bản ghi
public function find($id)
{
    $sql = "SELECT * FROM products WHERE id=:id";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}














}