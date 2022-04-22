<?php
include_once('../checkUsersSession.php');
include_once('../db_connection.php');
include_once('./paypal/config.php');

$id = $_GET['organizerId'];

$upComingEvents = "SELECT * FROM `events` WHERE `organizer_id` = $id AND `date` >= DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 1 DAY) LIMIT 6;";
$eventData = mysqli_query($conn, $upComingEvents);

// get email of organzier for paypal transaction
$organizerResult = mysqli_query($conn, "SELECT `email` FROM `organizers` WHERE `u_id` = $id;");
$organizerArray = mysqli_fetch_assoc($organizerResult);
// $sellerEmail = $organizerArray['email'];
$sellerEmail = 'kiran3saba-facilitator@gmail.com';
?>
<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Upcoming Events</title>
    <?php include("../../../partials/csslinks.php"); ?>

</head>


<!--end::Head-->

<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->

    <?php include("../../../partials/_header-mobile.php"); ?>
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">

            <?php include("../../../partials/_asideForRoles.php"); ?>

            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <?php include("../../../partials/_header.php"); ?>

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="container">
                        <div class="row">
                            <?php
              if (mysqli_num_rows($eventData) == 0) {
                echo '
                    <div class="w-60 mx-auto py-10">
                      <h2>No upcoming events yet.</h2>
                    </div>
                    ';
              } else {
                echo '<h2 class="text-dark col-12 pl-md-10 mt-8">Upcoming Events</h2>';
                while ($eventArr = mysqli_fetch_assoc($eventData)) {
                  $eventId = $eventArr["id"];
                  $ticketsData = mysqli_query($conn, "SELECT * FROM `tickets` WHERE `event_id` = $eventId AND `status` = 'available';");
                  $available = mysqli_num_rows($ticketsData);
                  // $available = 0;
                  if ($available > 0) {
                    $ticketArr = mysqli_fetch_assoc($ticketsData);
                    $price = $ticketArr["price"];
                    $firstTicketId = $ticketArr["id"];

                    $_SESSION['ticketBuyerId'] = $_SESSION['id'];
                    $_SESSION['ticketSellerId'] = $id;
                    $_SESSION['eventId'] = $eventId;
                    $_SESSION['firstTicketId'] = $firstTicketId;
                    $_SESSION['pricePerTicket'] = $price;

                    echo '<!--begin::buy ticket modal-->

                    <div class="modal fade" id="buyTicket' . $eventId . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Buy Ticket</h5>
                                <h1 aria-hidden="true" data-dismiss="modal" style="cursor: pointer;">&times;
                                </h1>
                            </div>
                            <div class="modal-body">' .
                      "<form class='form' action='$PAYPAL_URL' method='POST'>
                      <input type='hidden' name='cmd' value='_xclick'>
                      <input type='hidden' name='business' value='$sellerEmail'>
                      <input type='hidden' name='item_name' value='Tickets'>
                      <input type='hidden' name='item_number' value='$firstTicketId'>
                      <input type='hidden' name='amount' value='$price'>
                      <input type='hidden' name='quantity' id = 'setQuantity' value='1'>
                      <input type='hidden' name='currency_code' value='USD'>
                      <input type='hidden' name='return' value = '$PAYPAL_RETURN_URL'>
                      <input type='hidden' name='cancel_return' value = '$PAYPAL_CANCEL_URL'>
                      " .
                      '<div class="form-group">
                                        <label class="font-weight-bold" style="font-size: 1.2rem;">
                                            Price Per Ticket : &nbsp;&nbsp;&nbsp;&nbsp;
                                            ' . $price . '
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label>How many tickets you want to buy?</label>
                                        <span class="text-danger pl-8">' . $available . ' Available</span>
                                        <input type="number" id = "enteredQuantity" name="numberOfTickets" max = "' . $available . '" class="form-control form-control-solid"
                                            style="border: 1px solid;" />
                                    </div>
                
                                    <div class="d-flex w-md-50 justify-content-between mt-12">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <input type="submit" name="buyTicket" value="Buy Now" class="btn btn-primary">
                                    </div>
                
                                </form>
                            </div>
                
                        </div>
                    </div>
                </div>
                
                <!--end::buy ticket modal-->';
                  }
                  echo '
                  
                  <!--begin::all events list-->

                      <div class="col-md-6 col-xl-4">
                    <div class="card card-custom gutter-b">
                      <!--begin::Body-->
                      <div class="card-body">
                        <!--begin::Wrapper-->
                        <div class="d-flex justify-content-between flex-column h-100">
                          <!--begin::Container-->
                          <div class="h-100">
                            <!--begin::Header-->
                            <div class="d-flex flex-column flex-center">
                              <!--begin::Image-->
                              <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100"
                                style="background-image: url(' . $eventArr['banner'] . ')"></div>
                              <!--end::Image-->
                              <!--begin::Title-->
                              <p
                                class="card-title font-weight-bolder text-dark-75 font-size-h4 m-0 pt-7 pb-1">
                                ' . $eventArr['title'] . '
                              </p>
                              <!--end::Title-->
                              <!--begin::Text-->
                              <!--end::Text-->
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="pt-1">
                              <!--begin::Item-->
                              <div class="d-flex flex-center pb-9">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light mr-4">
                                  <span class="symbol-label">
                                    <i class="fas fa-map-marker-alt"></i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                  <p
                                    class="text-dark-75 mb-1 font-size-lg font-weight-bolder">
                                    ' . $eventArr['location'] . '
                                  </p>
                                </div>
                                <!--end::Text-->
                              </div>
                              <div class="d-flex flex-center pb-9">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-45 symbol-light mr-4">
                                  <span class="symbol-label">
                                    <i class="fas fa-clock"></i>
                                  </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                  <p
                                    class="text-dark-75  mb-1 font-size-lg font-weight-bolder">
                                    Scheduled date : ' . date('d-M-Y', strtotime($eventArr['date'])) . ' <br>
                                    Time : ' . date('h-i-s : A', strtotime($eventArr['time'])) . '
                                    
                                  </p>
                                </div>
                                <!--end::Text-->
                                <!--begin::label-->
                              </div>
                              <div class="d-flex justify-content-center">';
                  if ($available > 0) {
                    echo "<a href='javascript;' data-target='#buyTicket$eventId' data-toggle='modal'>
                                    <button class='btn btn-primary btn-md'>
                                          Buy Ticket
                                        </button>
                                      </a>";
                  } else {
                    echo "<button class='btn btn-primary btn-md' disabled>
                            Sold Out
                          </button>";
                  }


                  echo '</div>
                            </div>
                            <!--end::Body-->
                          </div>
                          <!--end::Container-->

                        </div>
                        <!--end::Wrapper-->
                      </div>
                      <!--end::Body-->
                    </div>
                  </div>
                  
                  <!--end::all events list-->';
                }
              }
              ?>

                        </div>
                    </div>


                </div>

                <!--end::Content-->

                <?php include("../../../partials/_footer.php"); ?>
            </div>

            <!--end::Wrapper-->
        </div>

        <!--end::Page-->
    </div>

    <!--end::Main-->
    <?php
  include("../../../partials/_extras/offcanvas/quick-user.php");
  include("../../../partials/jslinks.php"); ?>
    <script>
    const enteredQuantity = document.getElementById('enteredQuantity');
    const setQuantity = document.getElementById('setQuantity');
    window.addEventListener('load', () => {
        enteredQuantity.setAttribute('value', '');

    });

    enteredQuantity.addEventListener('change', () => {
        var enteredVal = enteredQuantity.value;
        setQuantity.setAttribute('value', enteredVal);
        document.cookie = `totalTicketsBought = ${enteredVal}`;
    });
    </script>


</body>

<!--end::Body-->

</html>