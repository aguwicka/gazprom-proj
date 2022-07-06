<div class="app-search">
    <form class="app-search__form search" role="search" method="get" action="<?php echo home_url('/');?>" role="search">
        <div class="app-search__icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0013 9.66604L15.3346 14.7273L14.7287 15.3332L9.3954 10.272L10.0013 9.66604Z" fill="currentColor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.33464 1.5383C3.6865 1.5383 1.53976 3.68504 1.53976 6.33317C1.53976 8.9813 3.6865 11.128 6.33464 11.128C8.98277 11.128 11.1295 8.9813 11.1295 6.33317C11.1295 3.68504 8.98277 1.5383 6.33464 1.5383ZM0.667969 6.33317C0.667969 3.20356 3.20502 0.666504 6.33464 0.666504C9.46425 0.666504 12.0013 3.20356 12.0013 6.33317C12.0013 9.46278 9.46425 11.9998 6.33464 11.9998C3.20502 11.9998 0.667969 9.46278 0.667969 6.33317Z" fill="currentColor"/>
            </svg>
        </div>
        <input class="app-textfield app-search__textfield" type="search" placeholder="<?php echo esc_attr_x( 'Поиск по сайту', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" id="s">
        <input class="app-btn app-search__submit-btn" id="searchsubmit" type="submit" value="Найти">
    </form>
</div>

