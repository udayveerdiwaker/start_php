<?php
include 'header.php';
?>
    <link rel="stylesheet" href="book.css">
    <section class="book_section">
        <div class="container py-2">
            <h1 class="text-center mb-4">Adventure Booking</h1>
            <div class="row gy-4 card shadow">
                <div class="col-lg-12 card-body">
                    <div>
                        <form action="form-handler.php" method="POST" class="book">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile No.</label>
                                <input type="number" minlength="0" maxlength="10" class="form-control" id="mobile" name="mobile" required>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Preferred Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="mb-3">
                                <label for="activity" class="form-label">Choose Adventure</label>
                                <select class="form-select" id="activity" name="activity" required>
                                    <option value="Hiking">Hiking</option>
                                    <option value="Rafting">Rafting</option>
                                    <option value="Paragliding">Paragliding</option>
                                    <option value="Scuba Diving">Scuba Diving</option>
                                </select>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" name="submit">Book Now</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

