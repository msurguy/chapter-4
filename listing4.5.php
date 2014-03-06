<?
$catId = (isset($_GET['catId']) && $_GET['catId'] > 0)? $_GET['catId'] : 0;
$sql = "SELECT * FROM tbl_orders, tbl_product, tbl_category
    WHERE tbl_orders.inquiry_pdid = tbl_product.pd_id AND tbl_product.cat_id = tbl_category.cat_id 
    AND tbl_category.cat_parent_id = $catId  
    ORDER BY tbl_orders.inquiry_date DESC, tbl_category.cat_parent_id ASC";
$result = dbQuery($sql);
?>

<table width="100%" border="0" cellpadding="5" cellspacing="0" class="text">
  <tr id="listTableHeader">
    <td>Inquiry ID </td>
    <td>Batch ID</td>
    <td>Customer</td>
    <td>Brand</td>
    <td>Product</td>
    <td>Date</td>
  </tr>
  <?php if (dbNumRows($result) > 0) {
    while($row = dbFetchAssoc($result)) {
      extract($row);
      ?>
      <tr>
      <td><?php echo $inquiry_id; ?></td>
      <td><?php echo $inquiry_odid; ?></td>
      <td><?php echo $inquiry_batchall; ?></td>
      <td><?php
        $sqlname = "SELECT cat_name FROM tbl_category WHERE cat_id = $cat_parent_id";
        $resultname = dbQuery($sqlname);
        $rowname = dbFetchAssoc($resultname);
        echo $rowname['cat_name'];?>
      </td>
      <td><?php echo $cat_name; ?></td>
      <td><?php echo $pd_name; ?></td>
      <td><?php echo formatDate($order_date); ?></td>
      </tr><?php } } ?>
</table>
