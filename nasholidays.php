<?php

$title = "NAS Holidays";
$desc = "";
$canonical = "";
$key = "";

include('header.php'); ?>

<div class="carousel">
    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Hi 👋</div>
            <div class="num">01</div>
            <img src="https://images.unsplash.com/photo-1715350419939-7531798c80e2?q=80&w=3132&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Number 2 Heading</div>
            <div class="num">02</div>
            <img src="https://images.unsplash.com/photo-1715350419863-75aec02c2e64?q=80&w=3132&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Number 3 Heading</div>
            <div class="num">03</div>
            <img src="https://images.unsplash.com/photo-1715350419787-8d84c4ff30d6?q=80&w=3132&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Number 4 Heading</div>
            <div class="num">04</div>
            <img src="https://images.unsplash.com/photo-1715350419787-8d84c4ff30d6?q=80&w=3132&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Number 5 Heading</div>
            <div class="num">05</div>
            <img src="https://images.unsplash.com/photo-1615561916422-7014e1078997?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Number 6 heading</div>
            <div class="num">06</div>
            <img src="https://images.unsplash.com/photo-1542210504-c067f5e957db?q=80&w=3038&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Number 7 eading</div>
            <div class="num">07</div>
            <img src="https://images.unsplash.com/photo-1486556813609-9a827fdc306f?q=80&w=2969&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Number 8heading </div>
            <div class="num">08</div>
            <img src="https://plus.unsplash.com/premium_photo-1679830513922-d11c0fedfa99?q=80&w=3027&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>

    <div class="carousel-item">
        <div class="carousel-box">
            <div class="title">Number 9Heading</div>
            <div class="num">09</div>
            <img src="https://images.unsplash.com/photo-1605216663789-a86dbd5e59a5?q=80&w=3024&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
        </div>
    </div>
</div>

<script>
    /*--------------------
Vars
--------------------*/
    let progress = 50
    let startX = 0
    let active = 0
    let isDown = false

    /*--------------------
    Contants
    --------------------*/
    const speedWheel = 0.02
    const speedDrag = -0.1

    /*--------------------
    Get Z
    --------------------*/
    const getZindex = (array, index) => (array.map((_, i) => (index === i) ? array.length : array.length - Math.abs(index - i)))

    /*--------------------
    Items
    --------------------*/
    const $items = document.querySelectorAll('.carousel-item')
    const $cursors = document.querySelectorAll('.cursor')

    const displayItems = (item, index, active) => {
        const zIndex = getZindex([...$items], active)[index]
        item.style.setProperty('--zIndex', zIndex)
        item.style.setProperty('--active', (index - active) / $items.length)
    }

    /*--------------------
    Animate
    --------------------*/
    const animate = () => {
        progress = Math.max(0, Math.min(progress, 100))
        active = Math.floor(progress / 100 * ($items.length - 1))

        $items.forEach((item, index) => displayItems(item, index, active))
    }
    animate()

    /*--------------------
    Click on Items
    --------------------*/
    $items.forEach((item, i) => {
        item.addEventListener('click', () => {
            progress = (i / $items.length) * 100 + 10
            animate()
        })
    })

    /*--------------------
    Handlers
    --------------------*/
    const handleWheel = e => {
        const wheelProgress = e.deltaY * speedWheel
        progress = progress + wheelProgress
        animate()
    }

    const handleMouseMove = (e) => {
        if (e.type === 'mousemove') {
            $cursors.forEach(($cursor) => {
                $cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`
            })
        }
        if (!isDown) return
        const x = e.clientX || (e.touches && e.touches[0].clientX) || 0
        const mouseProgress = (x - startX) * speedDrag
        progress = progress + mouseProgress
        startX = x
        animate()
    }

    const handleMouseDown = e => {
        isDown = true
        startX = e.clientX || (e.touches && e.touches[0].clientX) || 0
    }

    const handleMouseUp = () => {
        isDown = false
    }


    function togglePlay() {
        const video = document.getElementById('videoPlayer');
        const playButton = document.getElementById('playButton');

        if (video.style.display === 'none') {
            video.style.display = 'block'; // Show video
            playButton.style.display = 'none'; // Hide button
            video.src += "?autoplay=1"; // Autoplay video
        }
    }

    /*--------------------
    Listeners
    --------------------*/
    document.addEventListener('mousewheel', handleWheel)
    document.addEventListener('mousedown', handleMouseDown)
    document.addEventListener('mousemove', handleMouseMove)
    document.addEventListener('mouseup', handleMouseUp)
    document.addEventListener('touchstart', handleMouseDown)
    document.addEventListener('touchmove', handleMouseMove)
    document.addEventListener('touchend', handleMouseUp)
</script>


<?php include('footer.php'); ?>