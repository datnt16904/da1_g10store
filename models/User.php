<?php

class User extends BaseModel
{
    //lấy toàn bộ account
    public function all()
    {
        $sql = "SELECT * FROM account";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Lấy ra 1 user
    public function find($id)
    {
        $sql = "SELECT * FROM account WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Lấy ra 1 user theo name
    public function findUserOfName($name)
    {
        $sql = "SELECT * FROM account WHERE name=:name";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => $name]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Thêm 1 user
    public function create($data)
    {
        $sql = "INSERT INTO account(user_name, name, password, email, phone, address) VALUES(:user_name, :name, :password, :email, :phone, :address)";
dd($data);
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    //Cập nhật user
    public function update($id, $data)
    {
        $sql = "UPDATE account SET name=:name, phone=:phone, address=:address, role=:role, active=:active WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        //thêm id vào data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    //cập nhật hoạt động của user (active)
    public function updateActive($id, $active)
    {
        $sql = "UPDATE account SET active=:active WHERE id=:id";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute(['id' => $id, 'active' => $active]);
    }
}
