@extends('layouts.app')


@section('content')

<section class="search_tenants">

  <h1> Tenants Information </h1>

    <form action="" method="post">
      <p>Enter Tanent ID: </p>
      <input type="text" name = "tenantId">
      <input type="submit" name = "search_tenant_id"
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
          <td><b>Name:</b></td>
          <td>
            <input type="text" value="<?php echo $row['usersName'];?>" disabled>
          </td>
        </tr>

        <tr>
          <td><b>Flat No:</b></td>
          <td>
            <input type="text" value="<?php echo $row['flatNo'];?>" disabled>
          </td>
        </tr>

        <tr>
          <td><b>Mobile No:</b></td>
          <td>
            <input type="text" value="<?php echo $row['mobile'];?>" disabled>
          </td>
        </tr>

        <tr>
          <td><b>Email ID:</b></td>
          <td>
            <input type="text" value="<?php echo $row['usersEmail'];?>" disabled>
          </td>
        </tr>

        <tr>
          <td><b>Username:</b></td>
          <td>
            <input type="text" value="<?php echo $row['usersUid'];?>" disabled>
          </td>
        </tr>

        <tr>
          <td><b>National ID:</b></td>
          <td>
            <input type="text" value="<?php echo $row['nid'];?>" disabled>
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