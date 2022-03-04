
<?php
  //session_start();
  include 'action.php';
?>
<h1>Thanks For Ordering!</h1>
<h2>See You Again...</h2>
<?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM cart');
              $stmt->execute();
              $grand_total = 0;
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
<table>
                
<td>

<input type="text" value="<?= $row['Cart_NoOfItems'] ?>">
</td>
<td><?= $row['P_name'] ?></td>
<td><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['Cart_TotalPrice'],2); ?></td>

              </tr>
              <?php $grand_total += $row['Cart_TotalPrice']; ?>
              <?php endwhile; ?>
              <tr>
              <td colspan="2"><b>Grand Total</b></td>
                <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
              </tr>
</table>
<p>Date/Time: <span id="datetime"></span></p>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>

