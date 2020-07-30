<?php if (isset($_SESSION['msg'])): ?>
    <div class="msg">
      <?php
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
      ?>
    </div>
  <?php endif ?>

  <table>
    <thead>
      <tr>
        <th>Image</th>
        <th>Equipment</th>
        <th>Supplier</th>
        <th>Detail</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_array($results)) {
        ?>
        <tr>
          <td><?php echo $row['EQ_image']; ?></td>
          <td><?php echo $row['EQ_equipmentName']; ?></td>
          <td><?php echo $row['S_CompanyName']; ?></td>
          <td><?php echo $row['EQ_detail']; ?></td>
          <td><?php echo $row['EQ_quantityAvailable']; ?></td>
          <td><?php echo $row['EQ_price']; ?></td>
          <td>
            <a href="#">Edit</a>
          </td>
          <td>
            <a href="#">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>