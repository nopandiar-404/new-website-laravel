<x-app-layout>

    <x-header_section :posts="$latestNewsPosts" />


    <x-home_top_advertisement :ad="$homeAdvertisement" />


    <x-search_news_section />


    <x-news_section :ad="$sidebarAdvertisement" />


    <x-home_middle_advertisement :ad="$homeAdvertisement" />


    <x-your_choice_news_section />


    <x-home_bottom_advertisement :ad="$homeAdvertisement" />


    <x-trending_videos_section />


</x-app-layout>
