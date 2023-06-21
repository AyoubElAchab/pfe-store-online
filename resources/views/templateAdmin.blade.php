<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>store admin</title>
        <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('style')
</head>
<body>

    <div class="wrapper">
        <!--Top menu -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="nav">
                    <ul>
                        <li>
                            <a href="{{route('produits.create')}}">ajouter un produit</a>
                        </li>
                        <li>
                            <a href="{{route('category.create')}}">ajouter un categorie</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                @yield('contentAdmin')
            </div>
        </div>
        <div class="sidebar">
            <!--profile image & text-->
            <div class="profile">
                <a href="/"><h2>My Store</h2></a>
            </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="#" >
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-chart-simple"></i></span>
                        <span class="item">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="/produits">
                        <span class="icon"><i class="fa-solid fa-cubes"></i></span>
                        <span class="item">Produits</span>
                    </a>
                </li>
                <li>
                    <a href="/category">
                        <span class="icon"><i class="fa-solid fa-grip"></i></span>
                        <span class="item">Categories</span>
                    </a>
                </li>
                <li> 
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-users"></i></span>
                        <span class="item">Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-basket-shopping"></i></span>
                        <span class="item">Commands</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-bell"></i></span>
                        <span class="item">Messages</span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                        <span class="item">Log out</span>
                    </a>
                </li>
            </ul>
        </div>
        
    </div>
    
    <script src="https://kit.fontawesome.com/cce4337ed9.js" crossorigin="anonymous"></script>

</body>
</html>
