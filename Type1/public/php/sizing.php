<?php
session_start();
include("../html/links.html");
require("connect_db.php");
 ?>

 <link rel="stylesheet" href="../css/sizing.css">

 <body style="font-family: citizen,sans-serif;font-weight: 700; font-style: normal;" class="noselect">

    <div class="w3-container w3-center w3-animate-opacity">

    <div style="float:left; font-size:28px; padding-top:40px; padding-left:15px;">
      <a href="../html/home.html"> <i class="fas fa-arrow-left"></i> </a>
    </div>

    <div class="large" style="text-align:center; padding-top:80px;">
        sizing.
    </div>

    </div>

    <div class="capsules" style="font-family: citizen,sans-serif;">
     <label for="my_checkbox" style="cursor:pointer;">Trousers</label>
    </div>


    <input type="checkbox" id="my_checkbox" style="display:none;">

  <div id="hidden">

    <div class="table-responsive">
      <table cellspacing=0 class="table" align="center">
        <tr>
          <td>Size</td>
          <td>XXS</td>
          <td>XS</td>
          <td>S</td>
          <td>M</td>
          <td>L</td>
          <td>XL</td>
          <td>XXL</td>
       </tr>

       <tr>
          <td>Waist (Inches)</td>
          <td>28</td>
          <td>30</td>
          <td>32</td>
          <td>34</td>
          <td>36</td>
          <td>38</td>
          <td>40</td>
        </tr>

        <tr>
          <td>Waist (CM)</td>
          <td>71</td>
          <td>76</td>
          <td>81</td>
          <td>86</td>
          <td>91</td>
          <td>96</td>
          <td>101</td>
        </tr>
      </table>

<br>

      <table cellspacing=0 class="table" align="center">
        <tr>
          <td>Inside Leg</td>
          <td>Short</td>
          <td>Regular</td>
          <td>Long</td>

       </tr>

       <tr>
          <td></td>
          <td>30</td>
          <td>32</td>
          <td>34</td>
        </tr>

        <tr>
          <td></td>
          <td>76</td>
          <td>81</td>
          <td>86</td>
        </tr>
      </table>
    </div>
  </div>

  <div class="capsules" style="font-family: citizen,sans-serif;">
  <label for="my_checkbox1" style="cursor:pointer;">T-Shirts</label>
  </div>
  </body>

<script src="../js/fade.js"></script>
