
<div class="logo-container">
    <img
        src="{{ asset('assets/Logo Kab malang.png') }}"
        alt="Polinema Logo"
    />
    <span>        {{ config('app.name') }}
</span>
</div>

<style>
    .logo-container {
    display: flex;
    align-items: center;
    gap: 8px;
}

.logo-container img {
    height: 32px;
    width: auto;
    flex-shrink: 0;
}

.logo-container span {
    font-weight: bold;
}
</style>