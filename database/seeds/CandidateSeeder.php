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
                "name"       => "Lê Hoàng Quân",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cnf2xsqBTP0b3xYgFu7U_deTXo3ppdFaXvff8WriJ-0BhOtXN4_KNHZZXcGi_PKe4XNF_vo51E7_0ADpFJzOdeuDIcE8QM2etmr8ORRGzTVo6-vHXJmzNQVMkgwTF-LpXaSIsTW9dU-EoAX0GQayGb=s800-no?authuser=0",
                "phone"      => "0988585568",
                "user_id"    => 31,
                "position"   => "Senior",
                "address"    => "Số 73 Quán Thánh, phường Quán Thánh, quận Ba Đình",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Nguyễn Xuân Sang",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eAQMRm2rf5THUly5HkKjzycht3hgo9pzxKJxA186KU65t9wQE6PmZJBVhP8eE13m_Yh9iY8tQKHLzewkpynXcC5DnlkVv1MZGiNdmDnkxK--Viv4vQ9uWE3qtf_m4K8K2QzSbqqlgm4tEXd6ay3ybj=w784-h979-no?authuser=0",
                "phone"      => "0916175566",
                "user_id"    => 32,
                "position"   => "Internship",
                "address"    => "Số 26 Nguyễn Văn Ngọc, phường Cồng Vị, quận Ba Đình",
                "experience" => "2 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Lê Phú Quý",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cSDlUZb1d7Yd4_piN-WZghyJH3J_sgJvd7KoS2BgoxzU_cetw1wsoZdzl3_Ti7IJ0zMx4v7KTnek1gEyiD9NOkREuG_FFmhAEzjPUj_x0Ya6ESvIy4wpQ77tTSPMrEXKGfvkzgvoMzlxVpJZwD_ba4=w341-h512-no?authuser=0",
                "phone"      => "0987898882",
                "user_id"    => 33,
                "position"   => "Fresher",
                "address"    => "Số 374-376 Đê La Thành, phường Ô Chợ Dừa, quận Đống Đa",
                "experience" => "3 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Lý Quốc Quyền",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cj-CYe7xglMqjN40M197oIg5AZSrfNbBqc0lPQevJv4lMv6HlG-XBQEVJS3IZBdwS_th0bsBNnkZSaMeeMjeQGCM7XmOJX1P-PkvmiikaOVMPb3_TYQ_1eUPH5P0hWSDxaATmWIw1sZWwmPi1cYr5v=w196-h257-no?authuser=0",
                "phone"      => "0912040325",
                "user_id"    => 34,
                "position"   => "Senior",
                "address"    => "28 Liễu Giai, Cống Vị, Ba Đình, Hà Nội",
                "experience" => "4 tháng",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Bùi Minh Quân",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eMV53fwKcqa-Isrxn20xj8M0x9zjr9sJJ4lHwH7bJlYxKGtCp0_5eaOFHdKwj1tM8H1kTR0nklr-T2-OaRqxhepDLNdm1QT4wHgzKqk9RkLXtb35Qt-_RuYPghTIQOOBN6uH3eirtPw1-ycGq7PRKS=w183-h275-no?authuser=0",
                "phone"      => "0989965118",
                "user_id"    => 35,
                "position"   => "Junior",
                "address"    => "3 Láng Hạ, Chợ Dừa, Ba Đình, Hà Nội",
                "experience" => "chưa có",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Nguyễn Vũ Ngọc Quyên",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eXDpNzAzyd39ec6RRJoHmMrLJmmceSwWOGvB1pSc_4PixzoH0t-sLM670H9MCLkJx1JYiE4MEDbBmoH4DTp_kXCdcCrFnENWWzR_56u8fEz2u_m6gFBRSxZSr9tXMCT1FxjAjJ4HVrDcw2ra0scSdq=w354-h472-no?authuser=0",
                "phone"      => "0904352749",
                "user_id"    => 36,
                "position"   => "Team Leader",
                "address"    => "Số 48 Giang Văn Minh, Ba Đình, Hà Nội",
                "experience" => "6 tháng",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 1,
            ],
            [
                "name"       => "Vũ Thị Phương",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cERUo6aXpSyxjCDmcYaO01XLDIbmVwcrZJlDk_yEvOUqqDgO9PlrTCQLRGFl6sWeh7TaNyf2yjo_65pyzt61idSlx9NfjTJQoMxQL-l7TPxl4BL8pE27PK77yXteJO0oxr7m7ti1BMKmJqoMYo673R=w653-h979-no?authuser=0",
                "phone"      => "0902210733",
                "user_id"    => 37,
                "position"   => "Internship",
                "address"    => "Kim Mã, Ngọc Khánh, Hà Nội",
                "experience" => "1 tháng",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Văn Sơn",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3foloHZUwI-PYo0LolWQCLp3ZvPUlDnEQrBrEIgz3nplNxeBJ7m1AheR8XD7WR7FzTXmvOUXfjWxdHnSyJ7Jp1hrhq_eeDmi-gEY4wSGwUIdhX5MZ8TOa6RFS2oKJmhvQn6Aos3_D3WpaZNRbnKNTRT=w354-h472-no?authuser=0",
                "phone"      => "0934447788",
                "user_id"    => 38,
                "position"   => "Internship",
                "address"    => "Số 18 Văn Cao, Ba Đình, Hà nội",
                "experience" => "2 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Lê Anh Sơn",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3ekjwtogpBg7DGg-iXyAXKtLv0H1-j3TjjgmCp4nCVo5r1kkBsvuXecd0LLkkKd1oTEH-hNbsptMsVo5XoKNKKvt3sM7UlXzNaDY8t6THZHdmBuJ41u3m2aueg1NV4Il9j6FPqyPfBl7cpeU2oZSiDl=w194-h259-no?authuser=0",
                "phone"      => "0968686291",
                "user_id"    => 39,
                "position"   => "Fresher",
                "address"    => "Số 335 Phố Kim Mã – Ba Đình – Hà Nội",
                "experience" => "3 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Ngọc Phương",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3dbxfsylBAJWCU0DnoEhE6YUxurfsm-yFljK6oKaqzMz_B4fbOvW4ncX7NTSMqUPTwe58Cco2T_ga3K2j6pKIXN5-W621La5GFoJqbU0gy6AJcTxMfmRKspfKNi6c0MknS6D_egZjyIvZ0tRHNwj1ys=s640-no?authuser=0",
                "phone"      => "0983266986",
                "user_id"    => 40,
                "position"   => "Senior",
                "address"    => "Số 92C, phố Lý Thường Kiệt, phường Cửa Nam, quận Hoàn Kiếm",
                "experience" => "4 tháng",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Bùi Anh Tài",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3c4dn_uznEwKDsS45YTGwiaJ2QcKABXoQ8X9VzFin50jCLYMnbdpocBz9WfTor8UsRxjWb7iXqHkXkVjIflAMPrhfIBafFd2bV3hl2Zhy7WjDDYR-6MBDUq8gIlpOZRMF2H_DPIX90PGFDydBhC_HuR=w341-h512-no?authuser=0",
                "phone"      => "0912177345",
                "user_id"    => 41,
                "position"   => "Internship",
                "address"    => "số 45 Cửa Nam, Hoàn Kiếm, Hà Nội   ",
                "experience" => "dưới 1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Dương Chí Tâm",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eTUsHPLyzCQLZgQ7fB-6qlUfiZ2zdBf-myRvCmLiiSqJDByCxiQZcZs7CmRBHqolnEY2XLrf6PL_dx67ZzPY3-Y80C478600gWBQL7BQ5VxcDHvpDryOFbQ9pqmPBi6XNXiIGjhAWy84QFSKMP8v-_=w720-h960-no?authuser=0",
                "phone"      => "0903220098",
                "user_id"    => 42,
                "position"   => "Leader",
                "address"    => "Biệt thự số 48 Tràng Thi Q.Hoàn Kiếm – TP. Hà Nội",
                "experience" => "6 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Trần Kim Ngân",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3eR5LaNd9aVkL4NhuB_4h7iOjuk-9WRjfBhnxal-wi1f-BfJfQ79kOoDtQwEW9-IGhRXfdbRI-AKy89FQuIhvbP9xN0fV3C_bYRvtMBaSiGaMOuBd-4EXk4h0-Si9KV0mhIgCFP9Pmu8qvfMkIC1N5n=w600-h900-no?authuser=0",
                "phone"      => "0976785816",
                "user_id"    => 43,
                "position"   => "Internship",
                "address"    => "Số 228 Âu Cơ, Quảng An, Tây Hồ, Hà Nội",
                "experience" => "6 tháng",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Đỗ Minh Ngọc",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3emeyW-sLgFyGkSIGIhYGHkhxz0-emOtyVBimmj5_QLPLrCdJQc-hW81Qsa3X0iY-R2y-YhJ5spR7u0tdxdvE-5mwQM6lZpbhbuCMMt6GxBoOZLJmY2m6mwDtD0F5NrF3XD1FPqnaFCd-veYeEM7UDD=w653-h979-no?authuser=0",
                "phone"      => "0983109724",
                "user_id"    => 44,
                "position"   => "Fresher",
                "address"    => "Số 73 Quán Thánh, phường Quán Thánh, quận Ba Đình",
                "experience" => "3 tháng",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Bùi Khánh Ngọc",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3f48pGP-Vbb8JtUEiFpIxz8F-uATN-N1ZeLXjgZp-9IJKhwFKyAHAdzP-ua2isAJF3hLeOGD5QOfNO7vcX-vxQFn8WgLM_fuIbfhGSBp1wGLvxJS3Blm_wGDxUOO0-nsnsrwyhyfJbDIYDizyLlc-i1=w224-h225-no?authuser=0",
                "phone"      => "0983899956",
                "user_id"    => 45,
                "position"   => "Senior",
                "address"    => "Số 49 Văn Cao, phường Liễu Giai, quận Ba Đình",
                "experience" => "2 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Trần Uyên Nhi",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3f3az5TJ5f0O6Z-QR9W0ctMRBYene_GjnK6JjdJVTHeHyDFJRE2ZRfHUgh1ruC3WIkY25kRZJwp3BO558CWq9DgUogpemJ_sfOCthMy1qMSIpldxLgD6k0GiTYMrb7R42yRCVvbE6c_mmgZ03yESOTt=w487-h700-no?authuser=0",
                "phone"      => "0984652666",
                "user_id"    => 46,
                "position"   => "Fresher",
                "address"    => "Số 26 Nguyễn Văn Ngọc, phường Cồng Vị, quận Ba Đình",
                "experience" => "dưới 2 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Phạm Đặng Gia Như",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fZPCUXo1x-nLzcNskPPGWdOFCeXvPMlYvxB0ijfyOPJ5N01zUAMkIpBGU_Dam4r4Ri9Y_S7BoX__mhAMMSuBERkfCGxAxZUMJM4JCwjLaNEFkBcC_861kC-SM6RkRU8vw1LAAy_brl_etK7EDAfa47=s550-no?authuser=0",
                "phone"      => "0942554498",
                "user_id"    => 47,
                "position"   => "Internship",
                "address"    => "Số 48 Giang Văn Minh, phường Đội Cấn, quận Ba Đình",
                "experience" => "chưa có",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Lê Tất Hoàng Phát",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3doluGiPuRLltCxRZ08ffxujbQuh0M8dBHr1oOQo2qL6mQirToaYCB2Ooq0_b2ZSobiQV79TEBjPEhk0ft5k45P2qVq-ntC-mmK6gCgpYNTe3trv62gDy89z3VgWhrfsns6CyfHI6TKvoPQ2j2ZFZOP=w191-h264-no?authuser=0",
                "phone"      => "0388403008",
                "user_id"    => 48,
                "position"   => "Internship",
                "address"    => "Số 28 phố Liễu Giai, phường Cống Vị, quận Ba Đình",
                "experience" => "4 tháng",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Đào Tuấn Phong",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3c4WKgg4_JCzmw2tbOHHILfCGfmojj5ls6AQq8LN1_ll6TsUAk_XrEXn6X-91DZk5fmDSQgZSrdIelREyWyexd3tZh9hJElC3Zr-wa3KIu5b_-ctvbfFiBwQp6H_3SbY0WHcv0_Whkj_hXYvy00Yekc=w616-h941-no?authuser=0",
                "phone"      => "0985861886",
                "user_id"    => 49,
                "position"   => "Internship",
                "address"    => "360 Kim Mã Q. Ba Đình",
                "experience" => "9 tháng",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Hoàng Tùng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cA2FPkQc8Bo5aEa10xh-PFXj8CbJaUp_X65eCtID37aNF5JHFMbh4dU9EyQJyc0gbHlCHltM-IHTbXIRPa_PSlkMw8uGO95gRmVTSW1RfIv-Wr18u7NrWwDrrxcch4jdrx3nBDLua0HSOj9Cqks-nA=w189-h266-no?authuser=0",
                "phone"      => "0904629579",
                "user_id"    => 50,
                "position"   => "Team Leader",
                "address"    => "84 Trần Nhân Tông, Q. Hai Bà Trưng",
                "experience" => "4 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Trần Thị Minh Sương",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3e4XtCttomiMuJXs1TdTM_2hDIFL3hdAAOwr_GN-fpgmbe0LgiW6ObZEi5iyLHuE5a0yJmNh23-FMsvNPWzCJeDF19WSdQ-fZhigWlK6OFb-rwcECXyQuHshLX8CgLkhoXIAIN_LAYU6zAFGsYWrQkv=w532-h513-no?authuser=0",
                "phone"      => "0983054815",
                "user_id"    => 51,
                "position"   => "Junior",
                "address"    => "1 Lê Thánh Tông, Q. Hoàn Kiếm",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Dương Thanh Tâm",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fS9L5eAmvJ-pSANqORllJ4Pig-mrYFr7hRwZL3NaD7hmXqsuT00eQm6OHoJ17Hnxvux6_9g_c0qjx1e2M3rPYNeOFPtZs_4bFpXaaThxr2zYKGHxSwHCBOFRbJE6xMJDG3oXZvTKyQjIectqU4NnvB=w784-h979-no?authuser=0",
                "phone"      => "0902207799",
                "user_id"    => 52,
                "position"   => "Internship",
                "address"    => "44B Lý Thường Kiệt, Q. Hoàn Kiếm",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Hồ Nguyễn Xuân Thanh",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3dfUdvRHiRjZsCmcCKTbaJZ6RzY6NLBu5aqDM8nBtlp4MiQaKAiR4q3sgmuveQuSj7KL2r03WrEYEM2RC5cy1p92zh2CV25EW0hyey4D0d60KQslWy89WAG5v6NVcrFWbQfJPniw5r25-aQc3LyYKhW=s225-no?authuser=0",
                "phone"      => "0988464946",
                "user_id"    => 53,
                "position"   => "Team Leader",
                "address"    => "K5 Nghi Tàm, 11 Xuân Diệu, Q. Tây Hồ",
                "experience" => "5 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Bùi Minh Thảo",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3ePTxxxBzcAeag37Jj_72FyQZdx2jCztI1qBAlDWS9vMVoqM72cwEvtCCc_6fqO89X1_7fWYCLs2uXpyy2AaywZwVF9d057j5TxxQ1cnCJYDcsDVVdqHDfl0FIfHOEoYABLLLXTFEUVidVtZnlES9po=w748-h979-no?authuser=0",
                "phone"      => "0983463800",
                "user_id"    => 54,
                "position"   => "Junior",
                "address"    => "83A Lý Thường Kiệt, Q. Hoàn Kiếm",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Đặng Văn Thắng",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3e_lQEpW8-aKhl8FXNspgy1p8X-G9d8bCv1hNdiDujxaEZji0esQhbTBi3hBFfQk_9zTrUwzpsDPYcWArptXl67NUMXfeuujrcPFN27ej9mJYuWGFqAOyy4VfRprhg_7MbGTO2bF-5Bz_a3rlgnN71Q=w203-h248-no?authuser=0",
                "phone"      => "0904148645",
                "user_id"    => 55,
                "position"   => "Internship",
                "address"    => "50 Nguyễn Chí Thanh, Q. Đống Đa",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Bùi Trung Thành",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3clJgD22WdgCQ9UA_-wCCaaAWdF4MbEnSRbvQj5WYQ6F7PI3xfKwXV52CjuFIeNcosjUnLv4Qn_ps9hA9TeUO0r1ZfltbK-QK99DTwKw4iNrdLkAwS40gzEQeGzZimOwdwZzbp3Rt4f_q0yRDKu__92=w639-h960-no?authuser=0",
                "phone"      => "0975778066",
                "user_id"    => 56,
                "position"   => "Internship",
                "address"    => "19 Phạm Đình Hổ, Q. Hai Bà Trưng",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Huy Bảo",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fcItT0lzYZsqwi1EGbdFWzNs9s-jHuaq64REFdcswQtxX-7Cff2MWL_JIR_XaaGbhJqxVE3jEYLz96i3U5j1l1ARgEHyUxa3D5LaWlChXUdwOTFTPUpnkhtYq1xz0CgnY5AVN0VduFO9Xl9wCI-zl1=w600-h900-no?authuser=0",
                "phone"      => "0966491916",
                "user_id"    => 57,
                "position"   => "Junior",
                "address"    => "23 Nguyễn Công Trứ, Q. Hai Bà Trưng",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 1,
                "order"      => 0,
            ],
            [
                "name"       => "Nguyễn Lê Phú An",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3cXLFKn9hbt0K-BV0mL5ispyu7N0P5z6qZekgB5-armncaGHXJjh8kSt33zuBk_wS5YQ2GbLCo1T-r-jccxHrjQlorN7qzhIpZAF035BiqvCv4xAp8P40YMA5n6lVcd1mBr0nROyR1PBP4Aa516Unnc=w192-h262-no?authuser=0",
                "phone"      => "0985505131",
                "user_id"    => 58,
                "position"   => "Internship",
                "address"    => "65 Quán Sứ, Q. Hoàn Kiếm",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 0,
                "order"      => 0,
            ],
            [
                "name"       => "Trần Hoàng Vĩnh Bảo",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3e9J4WA_HQ2kt10EdWLo7YMFGn5oN4CV_LOpeCKeBbRJnTAMNSv6-M_WkSWE2JSNxrD0VZPtiGBtrXfcW1uL76DA6fBKJZZGdliF7a8IHbKAp0JBdIhyCWVXPtDtfiZ8s67vqmON-OoGSn47vjd-wyO=s225-no?authuser=0",
                "phone"      => "0989383751",
                "user_id"    => 59,
                "position"   => "Internship",
                "address"    => "14 Trần Bình Trọng, Q. Hoàn Kiếm",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
                "active"     => 0,
                "order"      => 0,
            ],
            [
                "name"       => "Đinh Hồng Châu",
                "avatar"     => "https://lh3.googleusercontent.com/pw/ACtC-3fegRNisZHGddhETypOfQCk9hS9iDab9dYezfxiPbrUM8mdHgFlmauGYNOw_Fd4F-ILNi-vY8TdZBPiP2-kPnfplAqjAz_ffQepFBTXwmcn4iPZBLE-Q9i0mw5cqCzZ9SOI3Vw8JxG34DogQkvyPShV=w960-h959-no?authuser=0",
                "phone"      => "0983512050",
                "user_id"    => 60,
                "position"   => "Fresher",
                "address"    => "65 Quán Sứ, Q. Hoàn Kiếm",
                "experience" => "1 năm",
                "birthday"   => "2020-08-11",
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
                    'birthday'   => $item['birthday'],
                    'active'     => $item['active'],
                    'order'      => $item['order'],
                ]
            );
        }
        Schema::enableForeignKeyConstraints();
    }
}
