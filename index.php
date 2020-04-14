<?php get_header();?>
    <h1>Free Spins</h1>
 
<?php
    include_once( 'card-generator.php' );
?>
    
<?php get_footer(); ?>

<style>
header{
    width:100%;
}

content{
    width:70%;
    margin: 0 auto;
}

body{
    padding: 20px;
}

.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

    .card{
        background: #f3f3f3;
        width: 90%;
        height: auto;
        margin: 0 auto;
        min-height: 20px;
        
    }

    .inner-rate{
        vertical-align: middle;
        height:auto;
    }

    .card-rate{
        vertical-align: middle;
        padding:2px 2px 2px;
        background-color: white;
    }    

    .card-content{
        width: 33.33%;
       /*border: 1px solid red; */
    }

    .card div{
        display: flex;
        padding: 20px;
    }

    .card img{
        width:55%;
        height:auto;
    }

    .logo-content{
        display: block !important ; 

    }
</style>




