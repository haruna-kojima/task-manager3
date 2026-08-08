{{-- ナビゲーションコンポーネント サイト内の移動をサポートする役割 --}}

<nav class="bg-gray-800 shadow-lg">
    <div class="container mx-auto px-4 max-w-4xl">
        <div class="flex justify-between items-center py-4">
            {{-- ロゴ --}}
            <a href="{{ route('tasks.index') }}" class="text-white text-xl font-bold hover:text-gray-300">
                📋 タスク管理アプリ
            </a>
            
            {{-- ナビゲーションリンク --}}
            <div class="flex items-center space-x-4">
                {{-- @authは現在ログインしているユーザーがいる場合にだけ中身を表示する --}}
                @auth
                    {{-- ルート名（categories.index）を引数に渡すことで、ルートが変更されてもコードを書き換えなくて良い --}}
                    <a href="{{ route('categories.index') }}" class="text-gray-300 hover:text-white">
                        カテゴリー
                    </a>
                    <span class="text-gray-300">
                        {{-- App\Models\Userからnameを取得 --}}
                        {{ auth()->user()->name }}さん
                    </span>
                    {{-- logoutという名前のルートのURLを取得 --}}
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        {{-- ボタンを押すとactionへPOSTで送信 --}}
                        <button type="submit" class="text-gray-300 hover:text-white">
                            ログアウト
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white">
                        ログイン
                    </a>
                    <a href="{{ route('register') }}" class="text-gray-300 hover:text-white">
                        新規登録
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>