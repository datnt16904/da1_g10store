<link rel="stylesheet" href="css/footer.css">
<style>
    footer .bottom {
        text-align: center;

    }

    .bottom h3 {
        font-weight: lighter;

    }

    .menu-footer{
    li{
        list-style: none;
        margin-bottom: 1rem;
        a{
            text-decoration: none;
            /* color: #fff; */
            &:hover{
                color: black;
            }
        }
    }
}
</style>
<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <ul class="menu-footer">
                        <li>Tổng đài hỗ trợ</li>
                        <li><a href="">0858092004</a></li>
                        <li><a href="">0333102839</a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <ul class="menu-footer">
                        <li>Chính sách</li>
                        <li><a href="">Chính sách đổi trả</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Chính sách giao hàng</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <ul class="menu-footer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8778268185174!2d105.7456144691484!3d21.03759237587187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1731493858843!5m2!1svi!2s"
                            width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </ul>
                </div>
                
            </div>
            
        </div>
        <div class="bottom">
            <h3>© Copyright 2024 Co., Ltd. All rights reserved.</h3>
        </div>
        <script>
    //lấy button
    search =document.getElementById('search');
    //Viết sự kiện click cho nút search
    search.addEventListener('click', function(){
        keyword =document.getElementById('keyword').value;
        window.location = "<?= ROOT_URL  ?>" + "?ctl=search&keyword=" + keyword;

    })

    search.addEventListener('keydown', function(){
    if (e.key == 'Enter'){

    }
})

function searchProduct(){
    window.location = "<?ROOT_URL ?>" + "?ctl=search&keyword=" + $keyword;
    
}


</script>
    </footer>