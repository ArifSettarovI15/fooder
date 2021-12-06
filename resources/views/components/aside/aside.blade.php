<div class="aside_wrapper">
    <div class="aside_content">
        <div class="aside_items">

            <div class="aside_logo">
                <x-svg name="logo" width="40"/>

            </div>
            <div class="aside_item aside_item_active">
                <div class="aside_item_icon">
                    <x-svg name="home" width="24"/>
                </div>
            </div>
            <div class="aside_item">
                <div class="aside_item_icon">
                    <x-svg name="Discount" width="24"/>
                </div>

            </div>
            <div class="aside_item">
                <div class="aside_item_icon">
                    <x-svg name="dashboard" width="24"/>
                </div>
            </div>
            <div class="aside_item">
                <div class="aside_item_icon">
                    <x-svg name="Message" width="24"/>
                </div>

            </div>
            <div class="aside_item">
                <div class="aside_item_icon">
{{--                    <x-svg name="Notification" width="24"/>--}}
                    @svg('notification', 24,24)
                </div>
            </div>
            <div class="aside_item">
                <div class="aside_item_icon">
                    <x-svg name="setting" width="24"/>
                </div>
            </div>
        </div>

        <div class="aside_item">
            <div class="aside_item_icon">
                <x-svg name="Logout" width="24"/>
            </div>
        </div>
    </div>
</div>
