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
                    <div class="flex flex-col gap-6">
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
                    <div style="width: 100%; height: 640px">
                        <img class="w-full h-full rounded" src="{{ asset('images/about-banner.jpg') }}" alt="About banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>