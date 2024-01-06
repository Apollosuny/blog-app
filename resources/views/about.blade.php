<x-layout>
    <div class="about" style="margin-top: 69px">
        <div class="about-banner" style="height: 500px">
            <div class="text-center grid grid-cols-3 bg-[url('/public/images/bg-about.jpg')] bg-gray-950/50 h-full items-center">
                <div></div>
                <div class="flex flex-col items-center gap-6">
                    <h1 class="text-5xl font-bold text-white">Describe what makes your company unique</h1>
                    <p class="text-lg font-normal text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, reiciendis, dolores magni ipsa minus vitae voluptatem aut recusandae, modi earum fugit aliquid possimus autem. Vitae voluptatem debitis autem? Magnam, a.</p>
                </div>
                <div></div>
            </div>
        </div>
        <div class="container flex flex-wrap items-center justify-between mx-auto p-4">
            <div class="about-desc mt-14">
                <div class="grid grid-cols-2 items-center gap-10">
                    <div class="flex flex-col gap-6" data-aos="fade-right" data-aos-duration="2000">
                        <h2 class="text-5xl font-bold">About VNUIS Blog</h2>
                        <p class="text-lg">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Fusce varius faucibus massa sollicitudin amet augue. 
                            Nibh metus a semper purus mauris duis. 
                            Lorem eu neque, tristique quis duis. 
                            Nibh scelerisque ac adipiscing velit non nulla in amet pellentesque. 
                            Sit turpis pretium eget maecenas. 
                            Vestibulum dolor mattis consectetur eget commodo vitae.
                        </p>
                        <p class="text-lg">
                            Amet pellentesque sit pulvinar lorem mi a, euismod risus rhoncus. 
                            Elementum ullamcorper nec, habitasse vulputate. 
                            Eget dictum quis est sed egestas tellus, a lectus. 
                            Quam ullamcorper in fringilla arcu aliquet fames arcu.
                            Lacinia eget faucibus urna, nam risus nec elementum cras porta. 
                            Sed elementum, sed dolor purus dolor dui. 
                            Ut dictum nulla pulvinar vulputate sit sagittis in eleifend dignissim. 
                            Natoque mauris cras molestie velit. 
                            Maecenas eget adipiscing quisque viverra lectus arcu, tincidunt ultrices pellentesque.
                        </p>
                    </div>
                    <div style="width: 100%; height: 640px" data-aos="fade-left" data-aos-duration="2000">
                        <img class="w-full h-full rounded" src="{{ asset('images/about-banner.jpg') }}" alt="About banner">
                    </div>
                </div>
            </div>
            <div class="mt-14">
                <div class="flex gap-6 flex-col">
                    <h3 class="text-5xl font-bold">Our locations</h3>
                    <p class="w-2/3 text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid blanditiis et reiciendis neque vero voluptatum omnis nulla quasi quae nemo impedit natus, voluptatem laudantium fuga commodi atque aspernatur, quod praesentium.</p>
                </div>
                <div class="grid grid-cols-2 mt-5">
                    <div class="flex flex-col gap-10">
                        <div class="flex gap-8" data-aos="fade-up" data-aos-duration="1000">
                            <div class="bg-black w-1"></div>
                            <div>
                                <div class="text-2xl font-bold">VietNam</div>
                                <div class="text-base mt-4 mb-6">1 Trinh Van Bo St, Nam Tu Liem, Hanoi</div>
                                <a href="" class="font-semibold">View map</a>
                            </div>
                        </div>
                        <div class="flex gap-8" data-aos="fade-up" data-aos-duration="2000">
                            <div class="bg-transparent w-1"></div>
                            <div>
                                <div class="text-2xl font-bold">VietNam</div>
                                <div class="text-base mt-4 mb-6">1 Trinh Van Bo St, Nam Tu Liem, Hanoi</div>
                                <a href="" class="font-semibold">View map</a>
                            </div>
                        </div>
                        <div class="flex gap-8" data-aos="fade-up" data-aos-duration="3000">
                            <div class="bg-transparent w-1"></div>
                            <div>
                                <div class="text-2xl font-bold">VietNam</div>
                                <div class="text-base mt-4 mb-6">1 Trinh Van Bo St, Nam Tu Liem, Hanoi</div>
                                <a href="" class="font-semibold">View map</a>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-lg flex justify-center" data-aos="zoom-in-up" data-aos-duration="2000">
                        <div class="mapouter rounded-lg">
                            <div class="gmap_canvas rounded-lg">
                                <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=s%E1%BB%91%201,%20tr%E1%BB%8Bnh%20v%C4%83n%20b%C3%B4&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://embedgooglemap.net/124/">123movies</a><br>
                                <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
                                <a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>