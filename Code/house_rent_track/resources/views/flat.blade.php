
@extends('layouts.app')


@section('content')
  
    <section class="search_tenants">
  
      <h1> Flat Information </h1>
        <form action="" method="post">
          <p>Enter Flat Name: </p>
          <input type="text" name = "flatId">
          <input type="submit" name = "search_flatId"
          value = "search">
        </form>
  
    </section>
  
  
  <section class = "tenants_result">
    <?php
      if (isset($_POST['search_tenant_id'])) {
        $sql = "SELECT * FROM tenantinformation WHERE tenantId = '$_POST[tenantId]'";
          $stmt = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($stmt)) {
          ?>
          <table>
            <tr>
              <td><b>Tenant ID:</b></td>
              <td>
                <input type="number" value="<?php echo $row['tenantId'];?>" disabled>
              </td>
            </tr>
            
            <tr>
              <td><b>Flat No:</b></td>
              <td>
                <input type="text" value="<?php echo $row['flatNo'];?>" disabled>
              </td>
            </tr>
  
  
            <tr>
              <td><b>Rent Per Month:</b></td>
              <td>
                <input type="text" value="<?php echo $row['rent'];?>" disabled>
              </td>
            </tr>
          </table>
        </section>
         <?php
        }
  
      }
    ?>
  <a href="javascript:history.back()" class="btn btn-default">Dashboard</a>
@endsection
