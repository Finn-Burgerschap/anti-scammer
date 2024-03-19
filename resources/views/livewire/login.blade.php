<div class="flex justify-center items-center min-h-screen" x-data="{
    moveButton(el) {
        const screenWidth = window.innerWidth;
        const screenHeight = window.innerHeight;

        const randomX = Math.random() * (screenWidth - el.clientWidth);
        const randomY = Math.random() * (screenHeight - el.clientHeight);

        el.style.position = 'fixed';
        el.style.left = randomX + 'px';
        el.style.top = randomY + 'px';
    },
}">
    <form action="" class="flex flex-col max-w-[20rem] w-full gap-[1rem]">
        <input type="email" name="email" id="email" placeholder="Email...">
        <input type="password" name="password" id="password" placeholder="Password...">
        <button x-on:mouseover="moveButton($el)" class="px-[2rem] py-[1rem] bg-blue text-white">{{ __('Login') }}</button>
    </form>
</div>
