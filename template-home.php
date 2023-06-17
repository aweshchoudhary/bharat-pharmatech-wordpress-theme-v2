<?php
// Template Name: Home Template

get_header();
?>

<section class="md:p-10 px-5 py-5 md:h-[450px] overflow-hidden border-b items-center md:flex">
    <div class="md:w-1/2">
        <h2 class="mb-3">
            <span class="md:text-2xl text-lg block mb-2 font-semibold text-gray-600">Welcome To Bharat
                Pharmatech,</span>
            <span class="md:text-4xl sm:text-3xl text-2xl font-bold capitalize" style="line-height: 1.3;">
                High-Speed, Reliable, affordable, efficient <span class="text-primary">Capsule Filling
                    Machines</span>
            </span>
        </h2>
        <p>Bharat Pharmatech: Mumbai-based manufacturer of top-quality, high-speed capsule filling machines. 15
            years of experience. Reliable, affordable, efficient. Enhance your manufacturing process today!</p>
        <div class="action-btns flex flex-wrap gap-2 mt-4">
            <a class="btn btn-filled" href="/contact-us">
                <iconify-icon class="text-2xl" icon="ic:sharp-phone"></iconify-icon>
                Contact
            </a>
            <a class="btn btn-outlined" href="/enquiry">Enquiry</a>
            <div class="flex md:w-auto w-full md:mt-0 mt-3 items-center gap-2 mr-3">
                <iconify-icon icon="ic:sharp-verified-user" class="text-4xl text-green-700"></iconify-icon>
                <span>100+ Verified Customer Reviews</span>
            </div>
        </div>
    </div>
    <div class="flex-1 md:block hidden opacity-50">
        <ul class="flex flex-wrap -rotate-6">
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(56)[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(55)[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(65)[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(64)[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(63)[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(66)[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(54)[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(79, "large")[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
            <li class="w-1/3 p-2">
                <figure class="border rounded-lg">
                    <img src="<?php echo wp_get_attachment_image_src(78, "large")[0] ?>" alt="Machine Image">
                    <figcaption class="opacity-0 absolute"></figcaption>
                </figure>
            </li>
        </ul>
    </div>
</section>
<section class="md:py-5 md:px-14 py-3 border-b">
    <ul class="flex flex-wrap justify-between items-center">
        <li class="md:w-[200px] w-1/2 px-5 py-3">
            <figure>
                <img class="w-full h-full object-contain"
                    src="<?php echo wp_get_attachment_image_src(74, "large")[0] ?>"
                    alt="indiamart logo background transparent">
                <figcaption class="opacity-0 absolute">indiamart logo background transparent</figcaption>
            </figure>
        </li>
        <li class="md:w-[150px] w-1/2 px-5 py-3">
            <figure>
                <img class="w-full h-full object-contain"
                    src="<?php echo wp_get_attachment_image_src(75, "large")[0] ?>"
                    alt="justdial logo background transparent">
                <figcaption class="opacity-0 absolute">justdial logo background transparent</figcaption>
            </figure>
        </li>
        <li class="md:w-[150px] w-1/2 px-5 py-3">
            <figure>
                <img class="w-full h-full object-contain"
                    src="<?php echo wp_get_attachment_image_src(76, "large")[0] ?>"
                    alt="google my business logo background transparent">
                <figcaption class="opacity-0 absolute">google my business logo background transparent</figcaption>
            </figure>
        </li>
        <li class="md:w-[200px] w-1/2 px-5 py-3">
            <figure>
                <img class="w-full h-full object-contain"
                    src="<?php echo wp_get_attachment_image_src(77, "large")[0] ?>"
                    alt="trade india logo background transparent">
                <figcaption class="opacity-0 absolute">trade india logo background transparent</figcaption>
            </figure>
        </li>
    </ul>
</section>
<section class="md:p-14 p-5 border-b">
    <h2>Our range of expertise</h2>
    <div class="h-[5px] md:mb-10 mb-5 w-1/4 bg-primary"></div>
    <div class="flex md:flex-row flex-col md:px-0 px-5 gap-5">
        <div class="flex-1">
            <div class="card border p-5 text-center md:min-h-[340px]">
                <div class="card-top flex justify-center mb-3">
                    <figure>
                        <img class="w-full md:h-[150px] h-[100px] object-contain"
                            src="<?php echo wp_get_attachment_image_src(70, "large")[0] ?>"
                            alt="quality medal illustration image" />
                        <figcaption class="opacity-0 absolute">quality medal illustration image</figcaption>
                    </figure>
                </div>
                <div class="card-body">
                    <h2 class="text-xl mb-2 capitalize font-semibold">top-quality</h2>
                    <p class="text-xs">Bharat Pharmatech gives you trusted source for top-quality capsule
                        filling
                        machines, ensuring
                        precision and efficiency in pharmaceutical production.</p>
                </div>
            </div>
        </div>
        <div class="flex-1">
            <div class="card border p-5 text-center md:min-h-[340px]">
                <div class="card-top flex justify-center mb-3">
                    <figure>
                        <img class="w-full md:h-[150px] h-[100px] object-contain"
                            src="<?php echo wp_get_attachment_image_src(68, "large")[0] ?>"
                            alt="speed time clock illustration image" />
                        <figcaption class="opacity-0 absolute">speed time clock illustration image</figcaption>
                    </figure>
                </div>
                <div class="card-body">
                    <h2 class="text-xl mb-2 capitalize font-semibold">High-Speed</h2>
                    <p class="text-xs">Bharat Pharmatech: Delivering the Best High-Speed Capsule Filling
                        Machines
                        for Enhanced Productivity. Experience exceptional efficiency and precision with our
                        top-of-the-line machines.</p>
                </div>
            </div>
        </div>
        <div class="flex-1">
            <div class="card border p-5 text-center md:min-h-[340px]">
                <div class="card-top flex justify-center mb-3">
                    <figure>
                        <img class="w-full md:h-[150px] h-[100px] object-contain"
                            src="<?php echo wp_get_attachment_image_src(69, "large")[0] ?>"
                            alt="grow graph with dollar clock illustration image" />
                        <figcaption class="opacity-0 absolute">grow graph with dollar clock illustration image
                        </figcaption>
                    </figure>
                </div>
                <div class="card-body">
                    <h2 class="text-xl mb-2 capitalize font-semibold">Efficient Process</h2>
                    <p class="text-xs">Bharat Pharmatech: Your Source for Efficient Capsule Filling Machines.
                        Experience enhanced productivity and seamless operations with our cutting-edge machines.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex-1">
            <div class="card border p-5 text-center md:min-h-[340px]">
                <div class="card-top flex justify-center mb-3">
                    <figure>
                        <img class="w-full md:h-[150px] h-[100px] object-contain"
                            src="<?php echo wp_get_attachment_image_src(71, "large")[0] ?>"
                            alt="money dollar in hand illustration image" />
                        <figcaption class="opacity-0 absolute">money dollar in hand illustration image</figcaption>
                    </figure>
                </div>
                <div class="card-body">
                    <h2 class="text-xl mb-2 capitalize font-semibold">Affordable Solutions</h2>
                    <p class="text-xs">Bharat Pharmatech: Delivering Top-Quality Capsule Filling Machines at
                        Affordable Prices. Our
                        machines combine exceptional performance and reliability with competitive pricing.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="md:p-14 p-5 flex md:flex-row flex-col-reverse md:gap-10 gap-5 border-b">
    <div class="md:w-1/2">
        <div>
            <h2 class="text-3xl mb-3 font-bold">Bharat Pharmatech</h2>
            <p class="text-sm">
                Bharat Pharmatech is a Mumbai-based manufacturer of top-quality, high-speed, and cost-effective
                capsule filling machines. With over 15 years of experience, we deliver reliable and durable
                products
                that optimize your manufacturing process. Our machines are known for their excellence in speed
                and
                efficiency, increasing output without compromising accuracy. We prioritize affordability, making
                advanced technology accessible to businesses of all sizes. <br /><br /> Additionally, we offer a
                comprehensive
                range of change parts designed for seamless capsule filling. Trust Bharat Pharmatech for
                reliable,
                high-performing equipment to enhance your manufacturing processes. Contact us today to learn
                more.
            </p>
            <a href="/about" class="btn btn-filled w-fit block mt-3">Learn More</a>
        </div>
    </div>
    <div class="md:flex-1 w-full md:h-[350px] h-[200px] border">
        <figure>
            <img src="<?php echo wp_get_attachment_image_src(73, "large")[0] ?>"
                class="w-full h-full object-center object-cover" alt="capsule tubes and powder image" />
            <figcaption class="opacity-0 absolute">capsule tubes and powder image</figcaption>
        </figure>
    </div>
</section>
<section class="md:p-14 p-5">
    <h2>Our Customers Working Machine</h2>
    <div class="h-[5px] mb-10 w-1/4 bg-primary"></div>
    <ul class="flex flex-wrap">
        <li class="md:w-1/3 sm:w-1/2 md:p-3 py-2 w-full">
            <iframe class="w-full md:h-[250px] h-[200px]" src="https://www.youtube.com/embed/WVCgM9XYhvE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </li>
        <li class="md:w-1/3 sm:w-1/2 md:p-3 py-2 w-full">
            <iframe class="w-full md:h-[250px] h-[200px]" src="https://www.youtube-nocookie.com/embed/0QsgMHix7tA"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </li>
        <li class="md:w-1/3 sm:w-1/2 md:p-3 py-2 w-full">
            <iframe class="w-full md:h-[250px] h-[200px]" src="https://www.youtube-nocookie.com/embed/OXyzFw8fUsI"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </li>
        <li class="md:w-1/3 sm:w-1/2 md:p-3 py-2 w-full">
            <iframe class="w-full md:h-[250px] h-[200px]" src="https://www.youtube.com/embed/WVCgM9XYhvE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </li>
        <li class="md:w-1/3 sm:w-1/2 md:p-3 py-2 w-full">
            <iframe class="w-full md:h-[250px] h-[200px]" src="https://www.youtube.com/embed/WVCgM9XYhvE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </li>
        <li class="md:w-1/3 sm:w-1/2 md:p-3 py-2 w-full">
            <iframe class="w-full md:h-[250px] h-[200px]" src="https://www.youtube.com/embed/WVCgM9XYhvE"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </li>
    </ul>
</section>
<section class="md:p-14 p-5">
    <h2>Our Happy Customers</h2>
    <div class="h-[5px] mb-10 w-20 bg-primary"></div>
    <ul class="md:flex flex-wrap justify-center">
        <li class="md:w-1/3 h-[100px] p-2">
            <figure class="w-full h-full">
                <a target="__blank" href="https://www.sparshbiotech.com">
                    <img class="w-full h-full object-contain" loading="lazy"
                        src="https://www.sparshbiotech.com/images/name.gif" alt="Sparsh Biotech Company Logo image">
                </a>
                <figcaption class="opacity-0 absolute">Sparsh Biotech Company Logo image</figcaption>
            </figure>
        </li>
        <li class="md:w-1/3 h-[100px] p-2">
            <figure class="w-full h-full">
                <a target="__blank" href="https://www.streamlinepharma.in"><img class="w-full h-full object-contain"
                        loading="lazy" src="https://www.streamlinepharma.in/assets/front/images/logo.png"
                        alt="Stream Line Pharma Company Logo image"></a>
                <figcaption class="opacity-0 absolute">Stream Line Pharma Company Logo image</figcaption>
            </figure>
        </li>
        <li class="md:w-1/3 h-[100px] p-2">
            <figure class="w-full h-full">
                <a target="__blank" href="https://www.expertpharmaceuticals.com">
                    <img class="w-full h-full object-contain" loading="lazy"
                        src="https://www.expertpharmaceuticals.com/wp-content/themes/expertpharma/assets/images/logo-1.png"
                        alt="Expert Pharmaceuticals Company Logo image">
                </a>
                <figcaption class="opacity-0 absolute">Expert Pharmaceuticals Company Logo image</figcaption>
            </figure>
        </li>
        <li class="md:w-1/3 h-[100px] p-2">
            <figure class="w-full h-full">
                <a target="__blank" href="https://www.aishwaryahealthcare.com">
                    <img class="w-full h-full object-contain" loading="lazy"
                        src="https://www.aishwaryahealthcare.com/uploads/admin/7074.png"
                        alt="Aishwarya Heal Healthcare Company Logo image">
                </a>
                <figcaption class="opacity-0 absolute">Aishwarya Heal Healthcare Company Logo image</figcaption>
            </figure>
        </li>
    </ul>
</section>
<section class="md:p-14 p-5 border-b">
    <h2>Why Choose Us?</h2>
    <div class="h-[5px] mb-10 w-20 bg-primary"></div>
    <div class="my-5">
        <h3 class="flex items-center gap-3">
            <iconify-icon class="text-2xl text-primary md:block hidden"
                icon="teenyicons:tick-circle-solid"></iconify-icon>
            Bharat Pharmatech: Delivering Top-Quality Capsule Filling
            Machines
        </h3>
        <p class="md:ml-8">At Bharat Pharmatech, we take pride in being a leading provider of top-quality capsule
            filling
            machines. With our commitment to excellence and customer satisfaction, we have built a strong
            reputation in the pharmaceutical p-5 and nutraceutical industries.
        </p>
    </div>
    <div class="my-5">
        <h3 class="flex items-center gap-3">
            <iconify-icon class="text-2xl text-primary md:block hidden"
                icon="teenyicons:tick-circle-solid"></iconify-icon>
            Our Machines: Precision, Efficiency, and Reliability
        </h3>
        <p class="md:ml-8">Our capsule filling machines are meticulously designed and manufactured to meet the
            highest
            standards
            of precision, efficiency, and reliability. We understand the importance of accurate capsule
            filling
            and sealing, and our machines are engineered p-5 to deliver exceptional results every time.
        </p>
    </div>
    <div class="my-5">
        <h3 class="flex items-center gap-3">
            <iconify-icon class="text-2xl text-primary md:block hidden"
                icon="teenyicons:tick-circle-solid"></iconify-icon>
            Quality Assurance: Meeting Industry Standards
        </h3>
        <p class="md:ml-8">
            We prioritize quality assurance at every step of the manufacturing process. Our machines are
            built
            using premium materials and components, ensuring their durability and longevity. We adhere to
            stringent quality control measures to guarantee that each machine meets and exceeds industry
            standards p-5 and regulations.
        </p>
    </div>
    <div class="my-5">
        <h3 class="flex items-center gap-3">
            <iconify-icon class="text-2xl text-primary md:block hidden"
                icon="teenyicons:tick-circle-solid"></iconify-icon>
            Customer-Centric Approach: Comprehensive Support
        </h3>
        <p class="md:ml-8">
            At Bharat Pharmatech, we believe in providing comprehensive support to our valued customers. From
            initial installation and training to ongoing maintenance and troubleshooting, our dedicated team
            is
            always ready to assist. We understand that your success is our success, and we strive to
            establish
            long-term partnerships based on trust p-5 and mutual growth.
        </p>
    </div>
    <div class="my-5">
        <h3 class="flex items-center gap-3">
            <iconify-icon class="text-2xl text-primary md:block hidden"
                icon="teenyicons:tick-circle-solid"></iconify-icon>
            Continuous Innovation: Staying Ahead
        </h3>
        <p class="md:ml-8">
            In the ever-evolving pharmaceutical industry, we recognize the importance of staying ahead of the
            curve. Our research and development team continually explores new technologies and industry
            trends,
            allowing us to incorporate innovative features into our machines. By embracing advancements in
            the
            field, we ensure that our customers benefit p-5 from the latest capsule filling solutions.
        </p>
    </div>
    <div class="my-5">
        <h3 class="flex items-center gap-3">
            <iconify-icon class="text-2xl text-primary md:block hidden"
                icon="teenyicons:tick-circle-solid"></iconify-icon>
            Partnerships and Market Expansion: Growing Together
        </h3>
        <p class="md:ml-8">
            We actively seek strategic partnerships with suppliers, distributors, and industry experts to
            expand
            our reach and provide a more comprehensive solution to our customers. Collaborating with
            like-minded
            organizations allows us to tap into new markets and leverage collective expertise, resulting in
            a
            stronger value proposition p-5 for our clients.
        </p>
    </div>
    <div class="my-5">
        <h3 class="flex items-center gap-3">
            <iconify-icon class="text-2xl text-primary md:block hidden"
                icon="teenyicons:tick-circle-solid"></iconify-icon>
            Marketing Excellence: Promoting Your Success
        </h3>
        <p class="md:ml-8">
            With our dedicated marketing team, we employ a multi-faceted approach to showcase the features,
            benefits, and competitive advantages of our machines. Through targeted online campaigns,
            participation in industry trade shows, and engagement with industry publications, we aim to
            create
            awareness and promote the success p-5 of our customers.
        </p>
    </div>
    <div class="my-5">
        <h3 class="flex items-center gap-3">
            <iconify-icon class="text-2xl text-primary md:block hidden"
                icon="teenyicons:tick-circle-solid"></iconify-icon>
            Choose Bharat Pharmatech for Your Capsule Filling Needs
        </h3>
        <p class="md:ml-8">
            When it comes to capsule filling machines, Bharat Pharmatech stands as a trusted partner. Our
            commitment to delivering top-quality machines, combined with our comprehensive customer support
            and
            continuous innovation, sets us apart in the industry. Experience the reliability, efficiency,
            and
            precision of our capsule filling machines, and let us contribute to the growth and success of
            your
            business.
        </p>
    </div>

</section>



<?php get_footer() ?>