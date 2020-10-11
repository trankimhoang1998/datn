<?php

use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('candidates')->truncate();

        $candidates = [
            [
                "name"       => "Đặng Tuấn Anh",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cuSFZnWmjpNjixbbKOPfR02zQZxpBhT-vIN5n1KPO4piv_aHYQARoZpjUcVhNeGBSDksYgAPW1btXbozJroJMBIvuCSZGs8qHAtYnQ2Tf8nnsV6gUvazQ3kTLmVrCs3Lj004_XK05mtkjSCYmuH7EP=w600-h798-no",
                "phone"      => "0982527982",
                "user_id"    => 31,
                "position"   => "Senior",
                "address"    => "Số 73 Quán Thánh, phường Quán Thánh, quận Ba Đình",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Hoàng Đức Anh",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3dQo1PmydbVzDjrrDAkyHMQwS0Ocgu8dqg7rjXg-Jm7A0XGE4q5H3SPSZtIDlgLsiF3FjENAK-zfQ_TFu0UG51gtjClzr30Z-aoiG8QdSmg5vG2PRcBd78AkiKEM5WSVS4wrMJiKKv2ZgwulQVwoFbs=w640-h959-no",
                "phone"      => "0973776072",
                "user_id"    => 32,
                "position"   => "Internship",
                "address"    => "Số 26 Nguyễn Văn Ngọc, phường Cồng Vị, quận Ba Đình",
                "experience" => "2 năm",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Lưu Trang Anh",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3e4t2NUYkvBwWaI3UBuZZa9oyKyfP3kekQqTCUHnye1hy2G2lC5oCXmz2LSOctByuB7Xovkfob0Toh9EZB6Hlwgxftn319337NguJAl6rdaEeb4MUa3PbtRjI4Re4daB-IaDex5wnQ5eXJeozwMJP45=w635-h725-no",
                "phone"      => "0917749254",
                "user_id"    => 33,
                "position"   => "Fresher",
                "address"    => "Số 374-376 Đê La Thành, phường Ô Chợ Dừa, quận Đống Đa",
                "experience" => "3 năm",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Phạm Hoàng Anh",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fegRNisZHGddhETypOfQCk9hS9iDab9dYezfxiPbrUM8mdHgFlmauGYNOw_Fd4F-ILNi-vY8TdZBPiP2-kPnfplAqjAz_ffQepFBTXwmcn4iPZBLE-Q9i0mw5cqCzZ9SOI3Vw8JxG34DogQkvyPShV=w960-h959-no",
                "phone"      => "0904770053",
                "user_id"    => 34,
                "position"   => "Senior",
                "address"    => "28 Liễu Giai, Cống Vị, Ba Đình, Hà Nội",
                "experience" => "4 tháng",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Phạm Thị Hiền Anh",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fouP6wL0lINt-of5u8bx3Ko-oleitbzweeA-rUSs0A09UODRD8tM4jrH8crVNA5larZ1Yf2cY6lvxBLHYMvhmd8ORNr9jMC6oXylUzVAlq8L4pXgITDciwAOT3k9wR49TKWVC6itbb7ebT_igS9aBF=w341-h512-no",
                "phone"      => "0974880788",
                "user_id"    => 35,
                "position"   => "Junior",
                "address"    => "3 Láng Hạ, Chợ Dừa, Ba Đình, Hà Nội",
                "experience" => "chưa có",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Phạm Khắc Việt Anh",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fW5je2EnqCGc6yxC-wcAhiphgbglUYyhQUgED9FP6703e7wfhZrzFkn7mAHSgRcApk9ouCXUk7Jgus4n_qjrqRf2Mt6UX4V6I6rjQP2V3i1_405-h3FLbwc2gbnMyO3dShDbocUAu1tMAj-mA6ncix=s600-no",
                "phone"      => "0983888611",
                "user_id"    => 36,
                "position"   => "Team Leader",
                "address"    => "Số 48 Giang Văn Minh, Ba Đình, Hà Nội",
                "experience" => "6 tháng",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Đỗ Hoàng Gia Bảo",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eQXqKr2tCNBVmQez_p8AusKMXmNG2ukFG_8NBudfpTkDcoVhNv7pLxNTW1Y3Yhnwj7r9bxvgj8rT21yyMskeVRTtGujsMu3cwC4_DgeHtwbH86DywgNDERg_BcJCXtwCX5gngUwmS0VsPCuH_BcyAV=w451-h558-no",
                "phone"      => "0984603663",
                "user_id"    => 37,
                "position"   => "Internship",
                "address"    => "Kim Mã, Ngọc Khánh, Hà Nội",
                "experience" => "1 tháng",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Trần Thị Minh Châu",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fo9-Au3_EGtj9eQnroLUnWnSXSx33iI9kR1bj4IMoItTLdOWDnDxMp0BRF2T9NF-UKygp6qJP7XAEK5dPlJcsFWe79fbip0QjSGJpj0KjIC4MC67yZyobIQb4RVkTHlMGboYZV4hDCs0-MPHl-zLc5=w600-h590-no",
                "phone"      => "0986375176",
                "user_id"    => 38,
                "position"   => "Internship",
                "address"    => "Số 18 Văn Cao, Ba Đình, Hà nội",
                "experience" => "2 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Tăng Phương Chi",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fPjrhMHNowMaxD-WNbtH4E8LfLf6UebERWkErlDbXkxKtgkvwjifYgGSe55SkVguPwySN63BcauZQemJEb3Xick-vtAiO94JCcUEW_P1TWMgs5sNecjka6TCxNPS7WhOM1C6XTFhdWry5-t7qotQY8=w341-h512-no",
                "phone"      => "0914770545",
                "user_id"    => 39,
                "position"   => "Internship",
                "address"    => "Số 335 Phố Kim Mã – Ba Đình – Hà Nội",
                "experience" => "3 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Gan Feng Du",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cozGPAiZZIP9YAzn1N-4lkn-r-EQP_7QAZTbHjAcrlVyK2Bj5mWvYq6FY7q8Y2VmvWifhuwnvW-s_W3JrqGE1Ev0VKX723CoxRNgwZ93xmyb2sb2__1VVNd3n-bapzezc1AErfvbCwspcE3qN8uhlb=w750-h910-no",
                "phone"      => "0986253482",
                "user_id"    => 40,
                "position"   => "Internship",
                "address"    => "Số 92C, phố Lý Thường Kiệt, phường Cửa Nam, quận Hoàn Kiếm",
                "experience" => "4 tháng",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Phạm Tiến Dũng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eKKDf7lJSy7yVD4YR-nREEo5472OmOm0SNAO47YiAP58K10u2XJrO1lMILwHTv937b_pbuqJ1aB9Pt_4nyvKDDppf0LDb05OXkN7Wo7otgpRNE_gtm35LbG4DxyFZTwyHdhzI2bxi1G1sJYhF5TszN=w341-h512-no",
                "phone"      => "0944545232",
                "user_id"    => 41,
                "position"   => "Internship",
                "address"    => "số 45 Cửa Nam, Hoàn Kiếm, Hà Nội   ",
                "experience" => "dưới 1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Thái Dương",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3es6MUx77aEyxL1779Tkgj7xTsL9rIJxuUocfSywtH9P1z7LhhIIaHNL-777eeNjDWG8y2K4NJx1eOA60xQz2_POY7487MZrwStk1o5XvRK-q5L6c7VbuttJw2LNmQk7RR4eUCE3c7imH6hn_GYL4pD=w500-h670-no",
                "phone"      => "0912644784",
                "user_id"    => 42,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "6 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Trần Kim Ngân",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cvLFpe-LF3uiJbf1TFRI1ljxQVK4D9Z9tw4SgyzQyVhS7EesOSbABJeAYmdaUTcDpJ0njejRJ5R65FbcMecAo7fu9JJCyqiCckOaPIH-4ejkuTFYobCnOiCsT0x_2KkHXm1X7wcdNA2GMsTGA9BK-L=w600-h850-no",
                "phone"      => "0912644784",
                "user_id"    => 43,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "6 tháng",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Đỗ Minh Ngọc",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cV-aoEOelmhCIMXF8DezlAhFVQq9N8WsjCTxAyUU249uKXJ5u_1LokXiLefnmINt98E-EXIs47osB6T9maiwmFjcKa6DwGajTKYBwD-Lwoleei2m-bVyUFZGEJHX9NYdEg3aJ25P0gQb5UyXLRmqw4=s800-no",
                "phone"      => "0912644784",
                "user_id"    => 44,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "3 tháng",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Bùi Khánh Ngọc",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cnhLitkcz9_HLP2Fuhc3kZnHpLN0op-v6UazCmunwnjeUhteav4uO9phKd2CRnIIFpnNVosTC7QoPDgkUGrlFNlghjF-G0722Ks4FZ_ZK0dtT9kAPDfh5it2-NZPC9Tvuv1B-n14x13pK3QvyHY3wt=w653-h979-no",
                "phone"      => "0912644784",
                "user_id"    => 45,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "2 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Trần Uyên Nhi",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3dej-R6hsOixqBzAml2gTKDhojXC7n3TNYEl01aM5e6b9DQ0dhn_jbhV5r9g5ksi0qMYn-OgM50j18io0izo-p4_e6ANr_50xMQWhfIUHfaCOMVmIFHL-yH0mFNcdJSZ_Gk-WP_2QtrgmArIMP7cfWP=w364-h533-no",
                "phone"      => "0912644784",
                "user_id"    => 46,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "dưới 2 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Phạm Đặng Gia Như",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3dq5Nt5XZy7ZTgYiqQ0s9W6gaJkiC1WNgmcl7ASNereJ4-5GZ4lMpcy8hGcMIcNmpLmUyumy_gHrD450iuHuUGirLifY0nNfjDmfe6D89bF7JLsC--K70jA1t9v4bDlOjOgdU5Gcm50U3UrCh5LlEHz=w572-h673-no",
                "phone"      => "0912644784",
                "user_id"    => 47,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "chưa có",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Lê Tất Hoàng Phát",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cTVH6U-ELzQ6ya1PqWMk3JMJeII3usPnhuFtjatkTy8Jt2i0U9Eik3ZG6kcy7g-pJdoKklNanUoJid192B1CQW_2H8AwTfSCfFCZLOA45t_NMAwzuE_S2LZiaMgdejB_KhY8O1AOUypnDF1X3v0s3a=w472-h709-no",
                "phone"      => "0912644784",
                "user_id"    => 48,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "4 tháng",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Đào Tuấn Phong",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3f1jzs8jUqyPfK5NBh2g0lDIzPvQziJWuGObvGIhle8zkUZ_NecOdSaK4SHcG2Z3FiSXSEXDn1qZw18I0lfMEEpaTls2zwRCS0lxbKSogr1ALDg2-BAOK0fM5cTOR-6_xO86xxGEQWwQ6BYhiih3xVZ=w653-h979-no",
                "phone"      => "0912644784",
                "user_id"    => 49,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "9 tháng",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3esSX20GHcyDtf33e6v-5tklaWpsLkJjdEd3NnV8BaRBeODdn_iCVqNBEmLpcEtHTFccHApStSOczdxzHNUd32a6comSEyBJE6VQYLnKd9iWeias8teL0PJLzLz1l53ft9_gB0y93eg6XHkmJWiPFpr=w784-h979-no",
                "phone"      => "0912644784",
                "user_id"    => 50,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eHY1FlU19pchMOV47J-I7ROnNg1ZZ8KojXs_JTRPfj96t89I1SZreUlg4hXQ4C1kx1W_zmkDeQmET3kKxN0rTfjY4kdKREYp-JhHUMT-d0S88KaZIarO0Hj8x84zcvnOgjdb8vVJD3sq79slEmLN2p=w580-h881-no",
                "phone"      => "0912644784",
                "user_id"    => 51,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fvFHiqxpOzLWQxpGvNC5ZiEaFnvwKXvy2-1ZeoysFV54yPoGTrXmUJKmkcwDUQ-rdjxlDIvgHqWGpL88iH7CPRV5sAtYztRlZ_jNuA7801dABQZh23Zz6fsFZIhWyMIx2FWvcldoXacvITyO0ZyhFn=w427-h640-no",
                "phone"      => "0912644784",
                "user_id"    => 52,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eA2sKTFqs_eu5qJYz1Pu7kX9DctWCxvLXrz7k30Req-suoD_bi5ylXetZiDUzN2rWcoIBeYGuD3S8EsOikm88heg5zf9JEVpVP47udw5VeJMEb6uRd38k40gCPNHXAh3vuBD1i8lwBSLIe9UfTA3X6=w600-h901-no",
                "phone"      => "0912644784",
                "user_id"    => 53,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3e07mm82bRfczhQfbzoV4ai7RqJ_7Dvh8fzkPXEkDUzm2UrkwFGWBsvaabi7xrzWr0aqhRMrreves17icsMJ9kXd-Hdo47vMVzpOb35Rc8f_Q2GcoWSArjvNrzZk4nrJot_MZaGs7eBPl_SljDqGBui=s640-no",
                "phone"      => "0912644784",
                "user_id"    => 54,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3chD_uWVjL1zVTQ60SAG3XAC90dbCdpemFeNNtySbiuGCSnqbJ2ddihPhMt70bUhBIl7Ddd9Tg2HwtYLnkha6USEeNQmpQDVejWzZwlOdCKsAsZ5MQawwnGI-EH-b8p2NGTeRxxlY9axPfOfSfFRDIa=w747-h979-no",
                "phone"      => "0912644784",
                "user_id"    => 55,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3chD_uWVjL1zVTQ60SAG3XAC90dbCdpemFeNNtySbiuGCSnqbJ2ddihPhMt70bUhBIl7Ddd9Tg2HwtYLnkha6USEeNQmpQDVejWzZwlOdCKsAsZ5MQawwnGI-EH-b8p2NGTeRxxlY9axPfOfSfFRDIa=w747-h979-no",
                "phone"      => "0912644784",
                "user_id"    => 56,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eA2sKTFqs_eu5qJYz1Pu7kX9DctWCxvLXrz7k30Req-suoD_bi5ylXetZiDUzN2rWcoIBeYGuD3S8EsOikm88heg5zf9JEVpVP47udw5VeJMEb6uRd38k40gCPNHXAh3vuBD1i8lwBSLIe9UfTA3X6=w600-h901-no",
                "phone"      => "0912644784",
                "user_id"    => 57,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eA2sKTFqs_eu5qJYz1Pu7kX9DctWCxvLXrz7k30Req-suoD_bi5ylXetZiDUzN2rWcoIBeYGuD3S8EsOikm88heg5zf9JEVpVP47udw5VeJMEb6uRd38k40gCPNHXAh3vuBD1i8lwBSLIe9UfTA3X6=w600-h901-no",
                "phone"      => "0912644784",
                "user_id"    => 58,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 0,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eHY1FlU19pchMOV47J-I7ROnNg1ZZ8KojXs_JTRPfj96t89I1SZreUlg4hXQ4C1kx1W_zmkDeQmET3kKxN0rTfjY4kdKREYp-JhHUMT-d0S88KaZIarO0Hj8x84zcvnOgjdb8vVJD3sq79slEmLN2p=w580-h881-no",
                "phone"      => "0912644784",
                "user_id"    => 59,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 0,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3esSX20GHcyDtf33e6v-5tklaWpsLkJjdEd3NnV8BaRBeODdn_iCVqNBEmLpcEtHTFccHApStSOczdxzHNUd32a6comSEyBJE6VQYLnKd9iWeias8teL0PJLzLz1l53ft9_gB0y93eg6XHkmJWiPFpr=w784-h979-no",
                "phone"      => "0912644784",
                "user_id"    => 60,
                "position"   => "Internship",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "1 năm",
                "active"     => 0,
                "order"      => 0,
            ],

        ];
        foreach ($candidates as $item) {
            App\Models\Candidate::create([
                    'name'       => $item['name'],
                    'avatar'     => $item['avatar'],
                    'phone'      => $item['phone'],
                    'user_id'    => $item['user_id'],
                    'position'   => $item['position'],
                    'address'    => $item['address'],
                    'experience' => $item['experience'],
                    'active'     => $item['active'],
                    'order'      => $item['order'],
                ]
            );
        }
        Schema::enableForeignKeyConstraints();
    }
}
