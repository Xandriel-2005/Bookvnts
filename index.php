<?php
include('include/header.php');

// Fetch 3 most recent events for the hot campus passes section
$hot_events_query = "SELECT * FROM evnt_detail ORDER BY evnt_no DESC LIMIT 3";
$hot_events_result = mysqli_query($conn, $hot_events_query);
?>
<!-- Hero Section (Carousel) -->
<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="4"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="5"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="6"></button>
    </div>
    <div class="carousel-inner">
        <?php 
        $slides = [
            ['img' => 'slideshow-1.jpg', 'title' => 'Discover Exciting Events', 'sub' => 'From concerts to comedy, find it all in one place'],
            ['img' => 'slideshow-2.jpg', 'title' => 'Your Pass to Entertainment', 'sub' => 'Book your next unforgettable experience now!'],
            ['img' => 'slideshow-3.jpg', 'title' => 'Lights. Music. <span class="text-primary-custom">Action!</span>', 'sub' => 'Dive into the vibe of live performances and shows.'],
            ['img' => 'slideshow-4.jpg', 'title' => 'Moments That Matter', 'sub' => 'Celebrate life, one event at a time'],
            ['img' => 'slideshow-5.jpg', 'title' => 'Experience the Magic', 'sub' => 'Explore trending events around you with ease'],
            ['img' => 'slideshow-6.jpg', 'title' => 'Your Event, Your Way', 'sub' => 'Pick your seat, pick your time – we make it easy'],
            ['img' => 'slideshow-7.3.jpg', 'title' => 'Join the Buzz!', 'sub' => 'Be a part of something amazing']
        ];
        foreach($slides as $index => $slide) {
            $active = $index == 0 ? 'active' : '';
        ?>
        <div class="carousel-item <?php echo $active; ?>">
            <div style="background: url('assets/images/<?php echo $slide['img']; ?>') no-repeat center/cover; position:absolute; top:0;left:0;right:0;bottom:0;"></div>
            <div style="position: absolute; top:0; left:0; right:0; bottom:0; background: linear-gradient(to bottom, rgba(15,23,42,0.8), rgba(15,23,42,0.95));"></div>
            <div class="hero-content text-center" style="position:relative; z-index:1; padding: 120px 20px 160px; color: white;">
                <span class="hero-badge"><i class="fa-solid fa-fire"></i> Campus Circuits • Live Pro-Nites • 0% Scalping Guarantee</span>
                <h1 class="hero-title"><?php echo $slide['title']; ?></h1>
                <p class="hero-subtitle"><?php echo $slide['sub']; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev" style="z-index: 10;">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next" style="z-index: 10;">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Floating Search Bar -->
<div class="container hero-search-container">
    <div class="hero-search-bar">
        <div class="search-input-group">
            <i class="fa-solid fa-magnifying-glass"></i>
            <div class="input-stack">
                <label>SEARCH</label>
                <input type="text" placeholder="Artist, band, pro-nite, comedy club...">
            </div>
        </div>
        <div class="divider"></div>
        <div class="search-input-group">
            <i class="fa-solid fa-location-dot"></i>
            <div class="input-stack">
                <label>CAMPUS CIRCUIT</label>
                <select><option>All India Campuses</option></select>
            </div>
        </div>
        <div class="divider"></div>
        <div class="search-input-group">
            <i class="fa-regular fa-calendar"></i>
            <div class="input-stack">
                <label>SCHEDULE</label>
                <select><option>This Weekend</option></select>
            </div>
        </div>
        <button class="btn btn-accent btn-find">Find Passes</button>
    </div>
</div>

<!-- Categories -->
<div class="container mt-5 pt-4">
    <div class="d-flex justify-content-between align-items-end mb-4">
        <div>
            <span class="section-label">CURATED GENRES</span>
            <h2 class="section-title">Explore Live Experiences</h2>
        </div>
        <a href="events.php" class="view-all-link">View All Categories <i class="fa-solid fa-arrow-right"></i></a>
    </div>
    
    <div class="row g-3 categories-row">
        <!-- 6 categories -->
        <div class="col-6 col-md-4 col-lg-2">
            <a href="concert.php" class="category-card">
                <div class="icon-circle text-primary-custom"><i class="fa-solid fa-music"></i></div>
                <h5>Concerts</h5>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <a href="music.php" class="category-card">
                <div class="icon-circle text-accent"><i class="fa-solid fa-guitar"></i></div>
                <h5>Musical Night</h5>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <a href="comedy.php" class="category-card">
                <div class="icon-circle" style="color: #6366F1;"><i class="fa-solid fa-masks-theater"></i></div>
                <h5>Comedy Shows</h5>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <a href="sports.php" class="category-card">
                <div class="icon-circle" style="color: #3B82F6;"><i class="fa-solid fa-medal"></i></div>
                <h5>Sports Meets</h5>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <a href="awd_cer.php" class="category-card">
                <div class="icon-circle" style="color: #EF4444;"><i class="fa-solid fa-award"></i></div>
                <h5>Award Galas</h5>
            </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2">
            <a href="movies.php" class="category-card">
                <div class="icon-circle" style="color: #8B5CF6;"><i class="fa-solid fa-clapperboard"></i></div>
                <h5>Film Premieres</h5>
            </a>
        </div>
    </div>
</div>

<!-- Two Column Layout: Hot Passes & Login Hub -->
<div class="container mt-5 pt-4">
    <div class="row g-5">
        <!-- Left Column: Hot Campus Passes -->
        <div class="col-lg-7">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <span class="section-label">TRENDING PRO-NITES</span>
                    <h2 class="section-title">Hot Campus Passes</h2>
                </div>
                <span class="badge-soft">Selling Fast</span>
            </div>
            
            <div class="d-flex flex-column gap-4">
                <?php while($row = mysqli_fetch_assoc($hot_events_result)){ 
                    // Format date for the badge
                    $dateObj = date_create($row['evnt_date']);
                    $month = date_format($dateObj, "M");
                    $day = date_format($dateObj, "d");
                    $timeStr = date_format(date_create($row['evnt_time']), "H:i A");
                ?>
                <div class="hot-pass-card">
                    <div class="img-wrapper">
                        <img src="uploads/<?php echo $row['evnt_poster']; ?>" alt="Event">
                        <div class="date-badge"><span><?php echo $month; ?></span><strong><?php echo $day; ?></strong></div>
                        <div class="img-label"><?php echo $row['evnt_type']; ?></div>
                    </div>
                    <div class="card-content">
                        <div class="meta-row">
                            <span class="venue-tag"><i class="fa-solid fa-location-dot"></i> <?php echo $row['evnt_venue']; ?></span>
                            <span class="time-tag"><i class="fa-regular fa-clock"></i> Starts <?php echo $timeStr; ?></span>
                        </div>
                        <h4><?php echo $row['evnt_title']; ?></h4>
                        <p><?php echo substr(strip_tags($row['evnt_dicpt']), 0, 110); ?>...</p>
                        <div class="card-footer">
                            <div class="price-block">
                                <span class="label">Passes From</span>
                                <div class="price">₹<?php echo $row['evnt_tkt_price']; ?></div>
                            </div>
                            <a class="btn btn-accent" href="bk_tkts.php?evnt_no=<?= (int)$row['evnt_no'] ?>">Book Tickets <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        
        <!-- Right Column: Login Hub -->
        <div class="col-lg-5">
            <div class="login-hub-card">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div>
                        <span class="section-label">FAST TURNSTILE ENTRY</span>
                        <h2 class="section-title" style="font-size: 24px;">Student & Guest Hub</h2>
                    </div>
                    <div class="icon-circle" style="width: 48px; height: 48px; background: #E0F2FE; color: var(--primary);"><i class="fa-regular fa-id-badge" style="font-size: 18px;"></i></div>
                </div>
                
                <ul class="nav nav-pills nav-fill mb-4 custom-tabs" id="loginTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#login-tab">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#signup-tab">Sign Up</button>
                    </li>
                </ul>
                
                <div class="tab-content" id="loginTabsContent">
                    <div class="tab-pane fade show active" id="login-tab" role="tabpanel">
                        <form method="post" action="login.php">
                            <div class="mb-3">
                                <label class="form-label text-muted small fw-bold" style="font-size: 11px;">User ID</label>
                                <input type="text" name="usr_id" class="form-control bg-light" placeholder="Enter Your User-Id">
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label text-muted small fw-bold" style="font-size: 11px;">Password</label>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control bg-light" placeholder="••••••••••••">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-dark-custom w-100 mt-3">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                            </button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="signup-tab" role="tabpanel">
                        <p class="text-muted text-center mb-4" style="font-size: 14px;">Register to book events.</p>
                        <form method="post" action="signup.php" enctype="multipart/form-data">
                            <div class="mb-3"><input type="text" name="usr_id" class="form-control bg-light" placeholder="User ID"></div>
                            <div class="mb-3"><input type="email" name="email" class="form-control bg-light" placeholder="Email"></div>
                            <div class="mb-3"><input type="text" name="contact" class="form-control bg-light" placeholder="Contact Number"></div>
                            <div class="mb-3">
                                <label class="form-label small text-muted fw-bold">Upload ID</label>
                                <input type="file" name="image" class="form-control bg-light" style="padding-top: 10px;">
                            </div>
                            <div class="mb-3"><input type="password" name="password" class="form-control bg-light" placeholder="Password"></div>
                            <div class="mb-3"><input type="password" name="cpassword" class="form-control bg-light" placeholder="Confirm Password"></div>
                            <button type="submit" name="submit-2" class="btn btn-dark-custom w-100 mt-2">Sign Up</button>
                        </form>
                    </div>
                </div>
                
                <div class="verification-note mt-4 d-flex gap-2">
                    <i class="fa-solid fa-circle-check text-danger mt-1"></i> 
                    <div><strong>Verified Student IDs</strong> unlock instant institutional subsidies up to 40% off and offline WhatsApp pass QR delivery.</div>
                </div>
            </div>
            
            <div class="committee-banner mt-3">
                <div class="icon"><i class="fa-solid fa-bullhorn"></i></div>
                <div class="content" style="flex:1;">
                    <h5>College Fest Committee?</h5>
                    <p>List tickets & turnstile entry with 0% gateway commission.</p>
                </div>
                <button class="btn btn-light-custom">Host Event</button>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="container mt-5 pt-5 pb-5">
    <div class="text-center mb-5">
        <span class="section-label text-primary-custom" style="display:inline-block;">CAMPUS INTEGRITY STANDARD</span>
        <h2 class="section-title">Engineered Specifically For Indian Collegiate Culture</h2>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon bg-primary-soft text-primary-custom"><i class="fa-solid fa-qrcode"></i></div>
                <h4>Instant Turnstile QR</h4>
                <p>Tamper-proof, dynamic offline QR passes delivered directly to your WhatsApp and Apple/Google Wallet. Zero lag at college entrance gates.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon bg-accent-soft text-accent"><i class="fa-solid fa-ticket"></i></div>
                <h4>Exclusive Campus Subsidies</h4>
                <p>Direct institutional tie-ups guarantee transparent, pre-negotiated student passes with no hidden convenience surcharges.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <div class="feature-icon bg-slate-soft text-slate"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>Anti-Scalping Guarantee</h4>
                <p>Every pass is linked to verified student roll numbers or Aadhaar IDs. Re-selling or bot hoardings are strictly neutralized.</p>
            </div>
        </div>
    </div>
</div>

<!-- Bottom CTA Banner -->
<div class="container mb-5 pb-4">
    <div class="bottom-cta-banner">
        <div>
            <span class="badge text-white border border-white mb-3" style="opacity:0.8; font-size: 10px; padding: 6px 12px; border-radius: 9999px; letter-spacing: 0.05em;">CAMPUS CIRCUITS ACROSS INDIA</span>
            <h2>Ready to launch your college pro-nite?</h2>
            <p>Get real-time box office analytics, turnstile gate scanners for volunteer teams, and instant UPI payouts for campus fests.</p>
        </div>
        <div class="cta-actions">
            <button class="btn btn-white text-dark fw-bold px-4 py-2 rounded-pill shadow-sm">List Your Fest</button>
            <button class="btn btn-outline-white px-4 py-2 rounded-pill">Scanner App</button>
        </div>
    </div>
</div>
<?php
include('include/footer.php');
?>