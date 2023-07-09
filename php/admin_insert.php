<?php
include 'connect.php';


session_start();

if(!isset($_SESSION['email'])){
  header("Location: admin_insert.php");
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
              <a href="admin_insert.php" class="relative medium capitalize text-primary font-medium hover:text-primary transition block">
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
            <a href="admin_order.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
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


          <!--grafik pendapatan start -->
          <div class="space-y-1 pl-8 pt-4">
            <a href="admin_grafik_pendapatan.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              Grafik Pendapatan
              <span class="absolute -left-8 top-1 text-base text-white">
                <i class="fas fa-gift"></i>
              </span>
            </a>
          </div>
          <!--grafik pendapatan end -->

          <!--grafik status start -->
          <div class="space-y-1 pl-8 pt-4">
            <a href="admin_grafik_status.php" class="relative medium capitalize text-white font-medium hover:text-primary transition block">
              Grafik Status Pengerjaan
              <span class="absolute -left-8 top-1 text-base text-white">
                <i class="fas fa-gift"></i>
              </span>
            </a>
          </div>
          <!--grafik status end -->

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
      <div class="col-span-9 shadow rounded px-6 pt-5 pb-7 mt-6 lg:mt-0 h-screen overflow-auto bg-dark">
        <form action="produk.php" method="POST" enctype="multipart/form-data" class="h-screen">
          <h3 class="font-medium capitalize mb-4 text-white text-center text-2xl">Insert Products</h3>
          <div class="space-y-4">
            <div class="mt-6">
              <label class="block text-white" for="">Product Title </label>
              <input type="text"  name="nama_produk" placeholder="Enter Product Title" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg" />
            </div>

            <div class="mt-6">
              <label class="block text-white" for="">Availability </label>
              <select name="status" id="avlbty" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg">
                <option value="" disabled selected>Select a Availability of Product</option>
                <option value="Available">Available</option>
                <option value="Unavailable">Unavailable</option>
              </select>
            </div>

            <div class="mt-6">
              <label class="block text-white" for="revision">Revision</label>
              <select name="revisi" id="rvsion" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg">
                <option value="" disabled selected>Select a Revisition Times</option>
                <option value="1 Time">1 Time</option>
                <option value="2 Times">2 Times</option>
                <option value="3 Times">3 Times</option>
                <option value="4 Times">4 Times</option>
                <option value="5 Times">5 Times</option>
                <option value="6 Times">6 Times</option>
              </select>
            </div>

            <div class="mt-6">
              <label class="block text-white" for="categories">Category</label>
              <select name="kategori" id="ctgry" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg">
              <option value="" disabled selected>Select a Category of Product</option>
                <?php
                $select = "SELECT * FROM kategori ";
                $hasil = mysqli_query($conn,$select);
                while ($baris=mysqli_fetch_assoc($hasil)) {
                    $kategori= $baris['kategori'];
                    $id_kategori=$baris['id_kategori'];
                    echo"
                    <option value='$id_kategori'>$kategori</option>";
                }
                ?>
              </select>
            </div>
            <div class="mt-6">
              <label class="block text-white" for="delivery">Delivery Time</label>
              <select name="delivery" id="dlvry" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg">
                <option value="" disabled selected>Select a Delivery Times</option>
                <option value="1 Day">1 Day</option>
                <option value="2 Days">2 Days</option>
                <option value="3 Days">3 Days</option>
                <option value="4 Days">4 Days</option>
                <option value="5 Days">5 Days</option>
                <option value="6 Days">6 Days</option>
              </select>
            </div>

            <div class="space-y-4">
              <div class="mt-6">
                <label class="block text-white" for="price">Product Price </label>
                <input type="text" name="price" placeholder="Enter Product Price" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg" />
              </div>

            <div class="mt-6">
              <label class="block text-white" for="description">Product Description </label>
              <input type="text" name="deskripsi" placeholder="Enter Product Description" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg" />
            </div>

            <div class="mt-6">
              <label class="block text-white" for="productimage1">Product Image 1 </label>
              <input
                type="file" name="image1"
                class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-sm file:mr-5 file:py-2 file:px-6 file:rounded file:border-0 file:text-sm file:font-medium file:bg-primary file:text-white hover:file:cursor-pointer hover:file:bg-dark hover:file:text-primary hover:file:border hover:file:border-white"
              />
            </div>

            <div class="mt-6">
              <label class="block text-white" for="detail">Product Detail </label>
              <input type="text" name="detail" placeholder="Enter Product Detail" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg" />
            </div>

            <div class="mt-6">
              <label class="block text-white" for="format">Product Format </label>
              <input type="text" name="format" placeholder="Enter Product Format" class="text-white bg-dark w-full mt-2 px-4 py-3 border border-gray-200 focus:border-[#00ADB5] focus:bg-darkest focus:outline-none rounded-lg" />
            </div>
          </div>
          <div class="mt-6 pb-8">
            <button type="submit" class="px-6 py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium" name="insert_produk">Insert Product</button>
          </div>
        </form>
      </div>
      <!-- account content end -->
    </div>
    <!-- account wrapper end -->
  </body>
</html>
