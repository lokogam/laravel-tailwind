<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
    use Carbon\Carbon;

    class DashboardController extends Controller
    {
        public function index(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/dashboard', compact('dataFeed'));
        }

        public function analytics(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/analytics', compact('dataFeed'));
        }

        public function customers(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/customers', compact('dataFeed'));
        }

        public function orders(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/orders', compact('dataFeed'));
        }

        public function invoices(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/invoices', compact('dataFeed'));
        }

        public function shop(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/shop', compact('dataFeed'));
        }

        public function shop_2(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/shop_2', compact('dataFeed'));
        }

        public function product(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/product', compact('dataFeed'));
        }

        public function cart(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/cart', compact('dataFeed'));
        }

        public function cart_2(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/cart_2', compact('dataFeed'));
        }

        public function pay(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/pay', compact('dataFeed'));
        }

        public function campaigns(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/campaigns', compact('dataFeed'));
        }

        public function team_tabs(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/team_tabs', compact('dataFeed'));
        }

        public function team_tiles(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/team_tiles', compact('dataFeed'));
        }

        public function profile(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/profile', compact('dataFeed'));
        }

        public function messages(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/messages', compact('dataFeed'));
        }

        public function tasks(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/tasks', compact('dataFeed'));
        }

        public function inbox(){
            $dataFeed = new DataFeed();
            return view('pages/dashboard/inbox', compact('dataFeed'));
        }
    }
