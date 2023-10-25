<!-- Footer -->
<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">Hotel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eum et pariatur mollitia dolores nam quaerat dolore laboriosam
                deleniti, libero harum!
            </p>
        </div>

        <div class="col-lg-4 p-4">
            <h5 class="mb-3">Links</h5>
            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
            <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
            <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
            <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
            <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
        </div>

        <div class="col-lg-4 p-4">
            <h5 class="mb-4">Follow us</h5>
            <?php 
                if($contact_r['tw']!=''){
                    echo<<<data
                        <a href="$contact_r[tw]" class="d-inline-block text-dark text-decoration-none mb-2">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-twitter-x"></i>
                                Twitter
                            </span>
                        </a>
                    data;
                }
            ?>

            <br>

            <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
                <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-facebook"></i>
                    Facebook
                </span>
            </a>
            <br>

            <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none">
                <span class="badge bg-light text-dark fs-6 p-2">
                    <i class="bi bi-instagram"></i>
                    Instagram
                </span>
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    function setActive(){
        let navbar = document.getElementById("nav-bar");
        let a_tags = navbar.getElementByTagName('a');

        for(i=0; i<a_tags.length; i++){
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if(document.location.href.indexOf(file_name) >= 0){
                a_tags[i].classList.add('active');
            }
        }
    }
    setActive();

</script>