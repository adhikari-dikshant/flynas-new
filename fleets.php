<?php

$title = "Flynas Fleet";
$desc = "";
$canonical = "";
$key = "";

include('header.php'); ?>

<div class="page-container-fleets">
    <!-- Background -->
    <div class="fleet-bg"></div>

    <!-- Page Content -->
    <div class="content-container">
        <h1 class="page-title">Our <span class="text-highlight">Fleet</span></h1>

        <div class="fleet-info">
            <p class="intro-text">
                Flynas operates one of the youngest and most advanced fleets in the region, consisting of Airbus A320 and A330 aircraft. Our modern fleet ensures safety, efficiency, and comfort on every journey.
            </p>
        </div>

        <!-- Fleet Gallery -->
        <div class="fleet-gallery">
            <!-- A330 Aircraft -->
            <div class="aircraft-card">
                <div class="aircraft-image-container">
                    <div class="aircraft-interaction">
                        <div class="drag-instructions">
                            <div class="drag-icon"></div>
                            <p>Drag to rotate</p>
                        </div>
                    </div>
                    <img src="/images/A330.png" alt="Airbus A330" class="aircraft-image" id="a330-image">
                </div>
                <div class="aircraft-info">
                    <h2>Airbus A330</h2>
                    <div class="specs-grid">
                        <div class="spec-item">
                            <h3>Range</h3>
                            <p>11,750 km</p>
                        </div>
                        <div class="spec-item">
                            <h3>Capacity</h3>
                            <p>327 passengers</p>
                        </div>
                        <div class="spec-item">
                            <h3>Cruise Speed</h3>
                            <p>871 km/h</p>
                        </div>
                        <div class="spec-item">
                            <h3>Fuel Efficiency</h3>
                            <p>Class Leading</p>
                        </div>
                    </div>
                    <p class="aircraft-description">
                        The Airbus A330 is a wide-body twin-engine jet used primarily on long-haul routes. At flynas, the A330 enables us to offer comfortable travel to distant destinations with premium amenities and spacious seating.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>