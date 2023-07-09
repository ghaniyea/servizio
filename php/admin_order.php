<?php

include 'connect.php';

session_start();

if(!isset($_SESSION['email'])){
  header("Location: admin_order.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/servizio/dist/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body class="bg-darkest font-poppins">
    <!-- account wrapper -->
    <div class="lg:grid grid-cols-12 items-start gap-6">
      <!-- sidebar -->
      <div class="col-span-3">
        <div class="bg-dark shadow lg:h-screen p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
          <div class="divide-none">
            <!-- logo start  -->
            <div class="space-y-1 divide-none flex p-2">
              <img src="/servizio/dist/images/logo servizio.png" alt="" class="w-32 items-center" />
            </div>
            <!-- logo end  -->

            <!-- profile start -->
            <div class="space-y-1 divide-none flex p-2 mt-4 bg-primary rounded">
              <div class="flex-shrink-0">
                <img src="/servizio/dist/images/avataradmin.png" class="rounded-full w-14 h-14 p-1 border border-gray-200 object-cover" />
              </div>
              <div class="pl-3">
                <p class="text-gray-200">Hello,</p>
                <h4 class="text-white capitalize font-medium">Admin</h4>
              </div>
            </div>
            <!-- profile end -->

            <!-- single link -->
            <div class="space-y-1 pl-8 pt-4">
              <a href="admin_insert.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
                Insert Products
                <span class="absolute -left-8 top-0 text-base text-white">
                  <img src="/servizio/dist/images/admin-icons/insertproduct.png" alt="" class="w-5" />
                </span>
              </a>
            </div>
            <!-- single link end -->
          </div>

          <!-- single link -->
          
          <div class="pl-8 pt-4">
            <a href="admin_view.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              View Products
              <span class="absolute -left-8 top-0 text-base text-white">
                <img src="/servizio/dist/images/admin-icons/viewproduct.png" alt="" class="w-5" />
              </span>
            </a>
          </div>
          <!-- single link end -->

          <!-- single link -->
          <div class="pl-8 pt-4">
            <a href="admin_order.php" class="relative medium capitalize text-primary font-medium hover:text-primary transition block">
              All Orders
              <span class="absolute -left-8 top-0 text-base text-white">
                <img src="/servizio/dist/images/admin-icons/allorder.png" alt="" class="w-5" />
              </span>
            </a>
          </div>

          <!-- single link -->
          <div class="pl-8 pt-4">
            <a href="admin_payment.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              All Payments
              <span class="absolute -left-8 top-0 text-base text-white">
                <img src="/servizio/dist/images/admin-icons/allpayment.png" alt="" class="w-5" />
              </span>
            </a>
          </div>
          <!-- single link end -->

          <!-- single link -->
          <div class="pl-8 pt-4">
            <a href="adminlist_user.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              List Users
              <span class="absolute -left-8 top-0 text-base text-white">
                <i class="far fa-user"></i>
              </span>
            </a>
          </div>
          <!-- single link end -->

          <!-- grafik pendapatan start -->
          <div class="space-y-1 pl-8 pt-4">
            <a href="admin_grafik_pendapatan.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              Grafik Pendapatan
              <span class="absolute -left-8 top-1 text-base text-white">
                <i class="fas fa-gift"></i>
              </span>
            </a>
          </div>
          <!-- grafik pendapatan end -->

           <!-- grafik status start -->
           <div class="space-y-1 pl-8 pt-4">
            <a href="admin_grafik_status.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              Grafik Status Pengerjaan
              <span class="absolute -left-8 top-1 text-base text-white">
                <i class="fas fa-gift"></i>
              </span>
            </a>
          </div>
          <!-- grafik status end -->

          <!-- grafik penjualan start -->
          <div class="space-y-1 pl-8 pt-4">
            <a href="admin_grafik_penjualan.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              Grafik Penjualan Produk
              <span class="absolute -left-8 top-1 text-base text-white">
                <i class="fas fa-gift"></i>
              </span>
            </a>
          </div>
          <!-- grafik penjualan end -->


          <!-- single link -->
          <div class="pl-8 pt-4">
            <a href="logout.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              Logout
              <span class="absolute -left-8 top-0 text-base text-white">
                <i class="fas fa-sign-out-alt"></i>
              </span>
            </a>
          </div>
          <!-- single link end -->
        </div>
        <!-- single link end -->

        <!-- profile links end -->
      </div>
      <!-- sidebar end -->

      <!-- account content -->
      <div class="col-span-9 shadow rounded px-6 pt-5 pb-7 mt-6 lg:mt-0 p-5 h-screen bg-dark">
        <h3 class="font-medium capitalize mb-4 text-white text-center text-2xl">All Orders</h3>
        <div class="overflow-auto rounded-lg shadow hidden md:block">
          <table class="w-full">
            <!-- table head start  -->
            <thead class="bg-gray-700 border-b-2 border-white">
              <tr>
                <th class="p-3 text-sm font-semibold tracking-wide text-white text-center">No</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-white text-center">Due <br />Amount</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-white text-center">Invoice <br />Numbers</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-white text-center">Total <br />Products</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-white text-center">Order <br />Date</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-white text-center">Status</th>
                <th class="p-3 text-sm font-semibold tracking-wide text-white text-center">Delete</th>
              </tr>
            </thead>
            <!-- table head end  -->
            <tbody class="divide-y divide-gray-500">
              <!-- row 1 start  -->
              <?php
              $select = "SELECT DISTINCT cart.id_produk, cart.jumlah, cart.harga_produk ,proses.id_servis, proses.tanggal , proses.id_produk,proses.status_proses,proses.invoice 
              FROM cart JOIN proses ON (cart.id_produk=proses.id_produk) ORDER BY proses.id_servis ASC";
              $hasil = mysqli_query($conn,$select);
              if($hasil->num_rows > 0){
              while ($baris=$hasil->fetch_assoc()) {
                  $id=$baris['id_servis'];
                  $jumlah=$baris['jumlah']; 
                  $price=$baris['harga_produk'];
                  $status=$baris['status_proses'];
                  $invoice=$baris['invoice'];
                  $tanggal=$baris['tanggal'];
              echo"
              <tr class='bg-gray-700 text-white text-center'>
                <td class='p-3 text-sm whitespace-nowrap'>
                  <p class='text-primary font-semibold'>$id</p>
                </td>
                <td class='p-3 text-sm whitespace-nowrap'>
                  <p>$price</p>
                </td>
                <td class='p-3 text-sm whitespace-nowrap'>
                  <p class='text-primary font-bold'>$invoice</p>
                </td>
                <td class='p-3 text-sm whitespace-nowrap'>
                  <p>$jumlah</p>
                </td>
                <td class='p-3 text-sm whitespace-nowrap'>
                  <p>$tanggal</p>
                </td>
                <td class='p-3 text-sm whitespace-nowrap'>
                  <p class='p-1.5 text-xs font-medium uppercase tracking-wider text-primary bg-[#74CFD4] rounded-lg bg-opacity-50'>$status</p>
                </td>
                <td class='p-3 text-sm whitespace-nowrap'>
                  <i class='fas fa-trash cursor-pointer hover:text-primary text-white'></i>
                </td>
              </tr>";
              }}
              ?>
              <!-- row 1 end  -->

              <!-- row 2 start  -->
              
              <!-- row 2 end  -->

              <!-- row 3 start  -->
            
              <!-- row 3 end  -->
            </tbody>
          </table>
        </div>

        <!-- mobiile view start  -->
        <?php
        $select = "SELECT DISTINCT cart.id_produk,cart.jumlah,cart.harga_produk ,proses.id_servis, proses.tanggal, proses.id_produk, proses.status_proses, proses.invoice 
        FROM cart JOIN proses ON (cart.id_produk=proses.id_produk) ORDER BY proses.id_servis ASC";
        $hasil = mysqli_query($conn,$select);
        if($hasil->num_rows > 0){
        while ($baris=$hasil->fetch_assoc()) {
            $id=$baris['id_servis'];
            $jumlah=$baris['jumlah']; 
            $price=$baris['harga_produk'];
            $status=$baris['status_proses'];
            $invoice=$baris['invoice'];
            $tanggal=$baris['tanggal'];
        echo"
        <div class='grid grid-cols-1 gap-4 md:hidden'>
          <div class='bg-gray-700 p-4 rounded-lg shadow space-y-3'>
            <div class='flex items-center space-x-2 text-sm text-white'>
              <div>
                <p class='text-primary font-bold'>$id</p>
              </div>
              <div>
                <p>$tanggal</p>
              </div>
              <div>
                <p class='text-primary font-bold'>$invoice</p>
              </div>
              <div>
                <p class='p-1.5 text-xs font-medium uppercase tracking-wider text-primary bg-[#74CFD4] rounded-lg bg-opacity-50'>$status</p>
              </div>
            </div>
            <div class='flex items-center space-x-2 text-sm text-white'>
              <div>
                <p>$jumlah</p>
              </div>
            </div>
            <div class='flex items-center space-x-2 text-lg text-white'>
              <div>
                <p>$price</p>
              </div>
              <div class='pl-2'>
                <i class='fas fa-trash cursor-pointer hover:text-primary text-primary'></i>
              </div>
            </div>
          </div>";
        }}
          ?>
          <!-- table 1 end  -->
          <!-- table 2 start  -->
          
          <!-- table 2 end  -->

          <!-- table 3 start  -->
         
          <!-- table 3 end  -->
          <!-- mobiile view end  -->
        </div>
      </div>
      <!-- account content end -->
    </div>
    <!-- account wrapper end -->
  </body>
</html>
