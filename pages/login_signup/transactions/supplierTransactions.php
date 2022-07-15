<div class="container">

    <div class="card card-custom gutter-b">
        <!--begin::Header-->
        <div class="card-header py-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">Transactions</span>
                <span class="text-muted mt-3 font-weight-bold font-size-lg">
                    Lastest transactions performed as a supplier
                </span>
            </h3>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body">
            <!--begin::Table-->
            <div class="table-responsive ">
                <table class="table table-bordered table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
                    <thead class="bg-primary">
                        <th class="pl-10" style="min-width: 120px">
                            <span class="text-dark">Transaction id</span>
                        </th>
                        <th style="min-width: 110px">
                            <span class="text-dark">Type</span>
                        </th>
                        <th style="min-width: 120px">
                            <span class="text-dark">Product</span>
                        </th>
                        <th style="min-width: 120px">
                            <span class="text-dark">Amount</span>
                        </th>
                        <th style="min-width: 110px">
                            <span class="text-dark">Date</span>
                        </th>
                    </thead>
                    <tbody>
                        <?php
                        // transactions as seller
                        if (mysqli_num_rows($data1) > 0) {

                            while ($row1 = mysqli_fetch_assoc($data1)) {
                                echo '<tr>
                <td class="pl-10">
                    <span
                        class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">
                        ' . $row1['id'] . '
                      </span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Received</span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                    ' . $row1['product_name'] . '
                    </span>
                </td>
                <td>
                    <span class="text-info font-weight-bolder d-block font-size-lg">
                    ' . $row1['amount'] . '
                    </span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                    ' . $row1['date'] . '
                    </span>
                </td>

            </tr>';
                            }
                        }
                        if (mysqli_num_rows($data2) > 0) {

                            while ($row2 = mysqli_fetch_assoc($data2)) {
                                echo '<tr>
                <td class="pl-10">
                    <span
                        class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">
                        ' . $row2['id'] . '
                      </span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                    Sent
                    </span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                    ' . $row2['product_name'] . '
                    </span>
                </td>
                <td>
                    <span class="text-info font-weight-bolder d-block font-size-lg">
                    ' . $row2['amount'] . '
                    </span>
                </td>
                <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">
                    ' . $row2['date'] . '
                    </span>
                </td>

            </tr>';
                            }
                        }

                        ?>

                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Body-->
    </div>
</div>