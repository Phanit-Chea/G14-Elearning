<?php
require "models/payment.model.php";

?>
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css"/>
<div class="table-responsive p-5 pt-3">
    <h2>Payment List</h2>
    <div class="container w-50 pt-5"></div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr class="text-white">
                <th scope="col">ID</th>
                <th scope="col">Courses Name</th>
                <th scope="col">User Email</th>
                <th scope="col">Price</th>
                <th scope="col">Date</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            $payments = getAllPayments();

            foreach ($payments as $num => $payment) :

            ?>
                <tr>
                    <td class = "">
                        <?= $num + 1 ?>
                    </td>
                    <td>
                        <?= $payment['course_name']; ?>
                    </td>
                    <td>
                        <?= $payment['email']; ?>
                    </td>
                    <td>
                        <?= $payment['course_price']; ?>
                    </td>
                    <td>
                        <?= $payment['date']; ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script defer src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script defer src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap4.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>