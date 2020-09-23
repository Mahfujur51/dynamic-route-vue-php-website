<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div id="app">
    <div class="content">
        <nav>
            <ul>
                <li><router-link to="home">Home</router-link></li>
                <li><router-link to="about">About</router-link></li>
                <li><router-link to="service">Service</router-link></li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-md-8">
                <router-view></router-view>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet autem commodi, consectetur debitis eligendi fugit in iusto mollitia numquam odit quis quisquam sequi tempora ut. Perspiciatis placeat recusandae veritatis!</p>
            </div>
        </div>

    </div>



</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
<script>

        const Home = { template:`
     <table style="width:100%">
             <tr>
                    <td>ID</td>
                    <td>name</td>
                    <td>email</td>
                    <td>phone</td>
            </tr>
            <?php
                    include "db.php";
                    $result=mysqli_query($con,"SELECT * FROM tbl_user");
                    $i=1;
                    while ($row=mysqli_fetch_array($result)){



         ?>
              <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['phone'];?></td>
                </tr>
            <?php
                $i++;}
            ?>
    </table>
    ` };
    const About = { template:`<div class="body-content">
            <h3>About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur incidunt, provident rem repudiandae temporibus ullam voluptatem. At beatae laboriosam provident tenetur vel. Aliquam aspernatur corporis ducimus ea itaque nobis, sunt!</p>
        </div>` };
    const Service = { template:`<div class="body-content">
            <h3>Service</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur incidunt, provident rem repudiandae temporibus ullam voluptatem. At beatae laboriosam provident tenetur vel. Aliquam aspernatur corporis ducimus ea itaque nobis, sunt!</p>
        </div>` };


    const routes = [
        {path:'/about', component: About },
        {path:'/home',component:Home},
        {path:'/service',component:Service}
    ];

    const router = new VueRouter({
        routes,
        mode:"history",
        base:"vuerouter"

    })


    const app = new Vue({
        router
    }).$mount('#app')

</script>
</body>
</html>