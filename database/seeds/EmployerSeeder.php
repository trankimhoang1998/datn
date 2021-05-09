<?php

use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('employers')->truncate();

        $employers = [
            [
                "contact"     => "Phạm Vũ Ngọc Diệp",
                "company"     => "Axon Active DN",
                "phone"       => "01674269375",
                "address"     => "13th Floor, PVcomBank Building, 30/4 Street, Hai Chau District, Da Nang City, Vietnam",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dIrzI8sXGzeD_6rdstBFlqwgoP2kI6oRBoixWwXXQv6E_fC_2QW_2zDYAl_63xhbf83lQhXjwKxY8FreaR5YZxcCgUWE-FG8Ml2Y6eLlYfyPboPV-Rh2TyTkJ4e3ZFT0Be01jLZ3C5LgWyyBvlpOP8=s300-no",
                "user_id"     => 1,
                "website"     => "www.axonactive.vn",
                "description" => "Gia công phần mềm cho Châu Âu",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3dsEhXKwBMOL15MHepJhhE0iDJ7YykpdYrGNOuULFMGGaz2PdiaKAJFYqyjKsk8pxAe5HSnIgCYvgDA4ZuVs2OQHs7eBlmchdY8N06ytdEO6B-SI0HljhOz9KWx9W1bpEdwxN6B-5ZIS5J193eqDPMV=w1485-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Trần Đức Dương",
                "company"     => "FSOFT DN",
                "phone"       => "0962089926",
                "address"     => "F-Complex - Nam Kỳ Khởi Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng, Việt Nam",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3eG_IVJXz_gI8JD4hcP58i9ka8c4PnVG9xc77BkYPoePmON7E9lVBRySMGPvhMBecJp6FI0LBpzUhJpa6rBIsHPw9pySoT-AXrKjFA0WhgOoTjU09KZUXxxlPbUdlJrGI5QlhdD6upY_9PtT2XeHNju=w700-h500-no",
                "user_id"     => 2,
                "website"     => "fpt-software.com",
                "description" => "Gia công phần mềm cho Mỹ, Nhật",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3d0_MZNGCDQKxqacd9_eRMXNpwpV1GGmyqpQZMDUsGmHrbFfebZ04LEUjGZ-RMobV2lUGn0GH1yusggAFvm53BSIP_JwcdJ0JaWY_wsLprKAvPzcyrqHxoz9lVTlW84RhhlyU7SoZuY-0ZOx2AnV_fb=w1200-h624-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Nguyễn Quốc Huy",
                "company"     => "Logigear - Chi nhánh ĐN",
                "phone"       => "01695084768",
                "address"     => "Tầng 7, 346 đường 2/9, Q. Hải Châu, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3eqqSfGw-h5gSgpUDEJ-SxugzVY0jaYIuIl9SlikoNL0B1ixr_lcM2oiyapyAJXC1sgPCbanoiKJ6H4csPNMzDTt0h2lgRpc0uGXnwjhyjcA2EbU9L0Hp5jpXucR1QHghIWBlxI60ACg2zpKh_CX0Xj=w400-h300-no",
                "user_id"     => 3,
                "website"     => "Logigear.vn",
                "description" => "Dịch vụ kiểm thử phần mềm.",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3fBIPx1hqTZT6i6VpNSDB8zUKL7x4PLd-iADO4-nw8_2HLScGvVVG8FfHPMlZMX_81fn45dWdqU30LltgCJXY6xRiJZrdcf_yY62U4pw-TUyGdxj4pzCBj6udiLrrMyHfK6tjyBJzFoJ9ZBiPo_lvDd=w1467-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 1,
            ],
            [
                "contact"     => "Phạm Bảo Liên",
                "company"     => "Sioux - Chi nhánh ĐN",
                "phone"       => "0978366465",
                "address"     => "122 đường 2 Tháng 9, Hòa Cường Nam, Đà Nẵng (Tòa nhà Petrolimex)",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dIr8pRZFiW0BTBgX4YmEzw9DrVFvdGDLCrg3MXMFuYPER881SQovql5-4oz7VF-9lkei6S9QcQc0OfU7_9_t86Y9rc1HeaGjkv4au-7fpIyWFGpd3qgNAlW8tuNz6OlI7rhwCN-48H8X-xVT5znD-i=s640-no",
                "user_id"     => 4,
                "website"     => "http://sioux.asia",
                "description" => "Phát triển phần mềm",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3fQMoXRcHNzS6OtwPsWaAhv9h60a9okbhFEmiliv_HE70QNZfCjoEHkKhmtZep-YTEDurCPm3nGL6iaDth6Sb1XKbPBRcKBpkVHI_MxAx8BPIVxnlAJwT2AkSuAvmam2yeBn667KwjWhrzBXlz_b5le=w1467-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 1,
            ],
            [
                "contact"     => "Đinh Thùy Linh",
                "company"     => "NTT Data - Chi nhánh ĐN",
                "phone"       => "0933140284",
                "address"     => "36 Trần Quốc Toản, Tp. Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3em2Z0CnhjYO9OaRJ1CwOfkxaNmxuShyvKA1VzaNcMfwU17JoAYBMHX4L0_ldwcHxZDQxoHo_ZVtBxvy2iNsVrpOH9YRdAw-kLYO_kuQrgrNIlE9Z5qd8_M8ZS3zTaafg1WRTLjJMoyvoqXcJifBBVY=s640-no",
                "user_id"     => 5,
                "website"     => "http://www.nttdata.com.vn/",
                "description" => "Gia công phần mềm cho Nhật",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3fw1RDzsGPQa1CQZy376YYyT0rdn5KY1joFeKNcX0fR1kqc9vK5Qd8fSAZICmdqMBl_cyJZc8UregEYnpbEjMI-zuTF0EO8axmt_hVMHkyQ_F7Oewq-uxHe4BhH6GiJm2VDMLG7V8K1SucpS8Tx8tk7=w700-h400-no?authuser=0",
                "active"      => 1,
                "order"       => 1,
            ],
            [
                "contact"     => "Nguyễn Thùy Linh",
                "company"     => "Evizi",
                "phone"       => "0979115345",
                "address"     => "Danang Software Park – 6th Floor 02 Quang Trung Street, Hai Chau District Danang, Vietnam",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dClMg6wr5ZmQtHk7glEi9Fga33J-nSRLk-CpVWyMADh6JTF1gr6xlsbf-CCR9EEfQu6QmpSObFmW2JHtYOxqzlTwf4TxTw2ju3YGN_mouUPUOxklHhk3QU6PWy7AmTmHJqN9lKGsTF-32wuSaE3-aI=w546-h410-no",
                "user_id"     => 6,
                "website"     => "http://evizi.com/",
                "description" => "Gia công phần mềm cho thị trường Mỹ",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3elaU49lL0ccwGOXSJ6LYadnDLY6Lj00I0vK3a_Dv18gOxgUjlgSGf6u-78F667Gw2ecH7JVWRuzp3QX02FG0mBKHmtYt1MhTk0WAjb3aDH8XAimFiJl4DgbH_pwYtbZarxlENIVIPoqZIRdsuO_P2y=w1560-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 1,
            ],
            [
                "contact"     => "Đỗ Hà Linh",
                "company"     => "Magrabbit",
                "phone"       => "0986306331",
                "address"     => "8th Floor, DaNang Software Park,  02 Quang Trung Street, DaNang City, Vietnam",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3cWe6nuN-3fxGl_YDTFxDbG1yotg_rhYd-853i-uSX2p-lLR3tjNk1HOw-KZ7QdkOxW0wLWPkYfKKyEqcmkqjaJmlFTcl82rll-OIcM0IcMYaUv_Y7VkCacAGIxIFMxeaPzz_zn5DTJIWcqv0rTguv3=w800-h536-no",
                "user_id"     => 7,
                "website"     => "http://magrabbit.com",
                "description" => "Gia công phần mềm cho Mỹ ",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3fu-ZNBg48mmkZW70aK8zXXMV7BE5v5Od-63DIy1NKD9fN4XHyxMJgtPD4WOu_WP9KxQM4-QiBGaQ-XJl3_OeSw6s-wD_7cYoOk4_ilwtti-LWSxUVg7M1GLTF8EXO3Who7Ztny9yy7YAC59SO1vJR6=w800-h467-no?authuser=0",
                "active"      => 1,
                "order"       => 1,
            ],
            [
                "contact"     => "Vũ Thùy Linh",
                "company"     => "Chi nhánh Công ty TNHH Global CyberSoft (Việt Nam) tại Đà Nẵng",
                "phone"       => "0989393275",
                "address"     => "Tầng 6, toà nhà Phi Long, 52 Nguyễn Văn Linh, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3fu8NIwYAL5M0p59DsGUf-1EQmMCavkYnKClLHjQgVhLtkhw9dpAD8mXqwKfd81Ztu69zuDobN1gxmlnITZ-QeQlgLqcrTP73qB5FvZYOan1zJtvxrUF-3hYEZBFBCtT6_WR4jDeSHZcVYqITusN2LY=w546-h444-no",
                "user_id"     => 8,
                "website"     => "http://www.globalcybersoft.com/",
                "description" => "Gia công phần mềm cho Nhật, Mỹ",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3eJfxOAB4woQv6SRrNKCR5ahYVpW7oU22M3n7vgHFDf98ZumrQEv_7Bd-c3QuQXYF9nIPBws90WeiXP2ZFXaLSFI2qxDBXroMtbVfePXC0QhPWoZU93Oxlx8NMADoY4Q4uUzjUG8jT9J5lw2WuMbuZk=w620-h405-no?authuser=0",
                "active"      => 1,
                "order"       => 1,
            ],
            [
                "contact"     => "Đỗ Thùy Linh",
                "company"     => "Game Loft",
                "phone"       => "0918289858",
                "address"     => "10th Floor, Indochina Riverside Towers, 74 Bach Dang, Da Nang",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3eqqRyVatnpT-v0DicfzEbF9oyqRg-vOXo4_tzCnYUbQ7Shiikpy2lDNRXmE_lsv7V87VigcTV2E2h5YTcePL0pUH9-6jByRtJ1RdAyrJLms3dPMdfQUSILgWn1-LxvZTuck7h165AJUD9DwmLncKX-=s800-no",
                "user_id"     => 9,
                "website"     => "http://www.gameloft-sea.com/",
                "description" => "Test và phát triển Game (đã đóng cửa tại ĐN)",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3fLopcAoD2MRa_r2wrg92osrUw669IHGRAHGnpuz_qTdt0HA_cHV8h-rnPvyOPX2DswHyxHvlbElN5DIDuAMEt_WGwH1NVV316q_le6gzraBA1CuPE6Pn705bsVgMpM5Nz_b7WY4WvRV-GJVOkkh1xJ=w1567-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Hoàng Nhật Mai",
                "company"     => "Toàn Cầu xanh",
                "phone"       => "0933737485",
                "address"     => "31 Trần Phú, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3ctFd-4vwzbM644m5S9N7NlwK0Tl_TG8pUrnjG-zScoiUwVTTl-D5bzWNVrlVywb7njqQbWLSI_jX5__uk1GYnGEUxjh91rgo06fRm8hQ-TOawIokb475O7bDzd_5-TlFgvUiV6V2ZuDfhtDL3qrHps=s640-no",
                "user_id"     => 10,
                "website"     => "http://toancauxanh.vn/",
                "description" => "Phát triển Web, ứng dụng và gia công phần mềm",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3eCU0AGjiJMbRc-YH5yqjOQKK9J1v3wqQGbD-lnul8rAtOh3-6kTCACWOD5ZA5QX_o_3YnNOAqhG-5S475XKp81YCthkUXv_hz2Vta8vpkkdBQRx1Rt0WWrXsCxS8lW-wg35A8ZBk_seU_clJbhxf1p=w1024-h568-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Nguyễn Trọng Minh",
                "company"     => "Unitech (Việt Nam) - UniSoft (Nhật)",
                "phone"       => "0982913919",
                "address"     => " 07th Floor - Danang Software Park, 02 Quang Trung St., Danang, VN",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3eOpmIThZq2yATAEkTwrnG5ArnxT70ty48d3AKzBa3OIWkH6ocWM2CHKoNdHrBs2Z9ppNokWCwhzTqx7nmCassumiHfFeRyAYuC5jb6g_YINzw-6kKnvb-tBGUYI27DaSNHL0pbk-8PbkH1CfjrZFVy=s640-no",
                "user_id"     => 11,
                "website"     => "tinhte.vn",
                "description" => "Gia công phần mềm cho Nhật, Mỹ",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3d0md-8qHevJ9ixcvShubVYYeT2CkAHUte-N6TohnAapLMfiWAXBdxvw9nfbeTFNAhct14G4rZQIoZDpndy3U3ISszFJMU-5Qj6s_0c_62MmfOWOnAPgZWe-nATHdZ1ur2agaPzNvey1C_9t5sMZYuW=w1741-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Ngô Gia Minh",
                "company"     => "Công ty cổ phần AsianTech",
                "phone"       => "090836195",
                "address"     => "Lô 35 Đường số 4, An Hải Bắc, Sơn Trà, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dWqETpcLCeyCbyixo_dsmnzLBWsQo9elL61xkdxndZiDlTlHLKDNP-Ju6u_OyaCt2jxwFdGrGkW1wc-PppbIyFw7n9S88QiY2f5FQ1E0q1Z-eiNRh3ODEaBuRF3krPC8vnDNLqIm5WFvwIVaV3Ozms=w1000-h646-no",
                "user_id"     => 12,
                "website"     => "http://asiantech.vn",
                "description" => "Gia công phần mềm cho Nhật",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3dfOZhc_1Q4l1UaAkUqtAASh5Bv4iryOU0FdcU1N38fbokJpBFEe8Jgt4-2FstT5SmXntW-zLYiF0RQGVcigDvkX7YqVe6Qa-kgcB3blqsmbfgrMCRFYzocGWPc5ie_JqBtm427ju6daf9i_I0P6id7=w1600-h808-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Mai Hoàng Minh",
                "company"     => "CSFR Software co., ltd",
                "phone"       => "0909714623",
                "address"     => "1331 Nguyễn Tất Thành, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3ete44Q_6aNJarbnH3wekCqZQu_3UQZRCSvqi70Ms6w2nAwHkn-vqo7Xtp-hjY8HHey8ay0CCPikkum0gdpmDxYNmr5Yl2dhl2d8PzLvdgMrWYqS4XSyklqqK3iAWMJqTlkwGws5nUs6hNQwLg8Naof=s626-no",
                "user_id"     => 13,
                "website"     => "jd.com",
                "description" => "Gia công phần mềm",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3eHGJxRjXBX-9Jcv2aJWNveFFPcm_dl4EicfQFEoTAO-Lm9SO4xITrHPDc1D8CE7IMGgGdbQ9r644aX1X1zK7n35_v-1K_mM9kv54wZNXfaGxH_ZOldzbt4WAbSg_HvSmEu0K-ChM3JHjvd4ojXEEIJ=w1468-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Đỗ Hải Nam",
                "company"     => "Vina Saver",
                "phone"       => "0917410493",
                "address"     => "Software Park, 02 - Quang Trung, Thach Thang, Hai Chau, Da Nang",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3cZp9Q4tCLWpaMB6z_h3XXVoRZ_ISQJ-xi0HcOM2eGqi12Zf756HZiH_DzrKr63OG6qfOxnr_pcmMWv67bsL7WIYgTCJB35NBuCXzQELdz4Cgmxy2u1U-urJMWznhb-MvB6bUo5mLKVjemTm8ZllgbU=s800-no",
                "user_id"     => 14,
                "website"     => "weibo.com",
                "description" => "Gia công phần mềm cho thị trường Nhật ",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3e54BTIiU_xJOQCD8CfaSMwFuJGPoBr0a54tpscQ8qKpH2iL_9spleXpuZ4ncKRMJ97-OSCaw9iDo-NwsuHi6_BZN5DpgpyRLUhJ2hQY0DJflK3yB1lYaVQHVwr8Dir362jaJoJiuLyCQG7NYMPp2fh=w750-h468-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Trần Bảo Ngân",
                "company"     => "Công ty TNHH CNTT Netbiz",
                "phone"       => "0903122556",
                "address"     => "No: 82,  Pham Tu Street,  Cam Le ward, Da Nang city, Viet Nam",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dS5pnEE7DIp8CdDcgIwhwjUTZjQIJQmjuwaZn0mtQiOrRVYgXrhU6_DDl3E7m1mrTQsl0LOXpU7zMFHvviWeTx0TVbqVnBI9t5Kl39o-SwhTicJUbjVkf-FMdd6s7LWDDtEzN3Dw00yVqCOsPNGC_6=s225-no",
                "user_id"     => 15,
                "website"     => "http://www.mptelecom.com.vn/",
                "description" => "Gia công phần mềm cho Nhật và dịch vụ hỗ trợ khách hàng. ",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3eC-tCrOiIn8-NCCROe95dD10IklC7mpvbEGVCfdvqqsGLm-yofsFMk6KxR4RaC2E_nqd5TCLn-d4UGDEyc66PsQYN6hKoLIh8oTbRZAv7C6h0UZ_2OAcS3SgyAWznaJ5HUqA3JnctcEwDr7dcueiEq=w600-h375-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Bùi Kim Quyên",
                "company"     => "Công Ty TNHH Phần Mềm Máy Tính Nhật Bản  (Japan Computer Software Co. LTD.)",
                "phone"       => "098311883",
                "address"     => "Khu C, Fl 16, 02 Quang Trung, Thành phố Đà Nẵng, Việt Nam. ",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3cqLFerE7OUwQOqYuyUwm2C4v7Sn9X2HRuBlJtP3ZjIQGlf3jfRVeJnR8TQ9pK1qG2U1R7Lpi8FYexI-x8rf4cjYoG_Fjff-f5M36n6DV2BA_EL4kSsD9lpbmPg1-rbckyJDTIauGiQAeCMc0wNgLCQ=w252-h200-no",
                "user_id"     => 16,
                "website"     => "http://www.jcs-corp.com/",
                "description" => "Triển khai các hệ thống phần mềm của ITC tại VN. Gia công phần mềm cho thị trường Nhật",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3eC-tCrOiIn8-NCCROe95dD10IklC7mpvbEGVCfdvqqsGLm-yofsFMk6KxR4RaC2E_nqd5TCLn-d4UGDEyc66PsQYN6hKoLIh8oTbRZAv7C6h0UZ_2OAcS3SgyAWznaJ5HUqA3JnctcEwDr7dcueiEq=w600-h375-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Võ An Phước Thiện",
                "company"     => "Công Ty TNHH IF Việt Nam",
                "phone"       => "0918129188",
                "address"     => "Tầng 3, Tòa nhà số 15 Quang Trung, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3cqLFerE7OUwQOqYuyUwm2C4v7Sn9X2HRuBlJtP3ZjIQGlf3jfRVeJnR8TQ9pK1qG2U1R7Lpi8FYexI-x8rf4cjYoG_Fjff-f5M36n6DV2BA_EL4kSsD9lpbmPg1-rbckyJDTIauGiQAeCMc0wNgLCQ=w252-h200-no",
                "user_id"     => 17,
                "website"     => "http://i-fc.jp/",
                "description" => "Gia công phần mềm cho thị trường Nhật . 100% vốn đầu tư của Nhật, Chủ đầu tư là Công ty cổ phần I-Factory có trụ sở chính ở Tokyo, Nhật Bản.",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3fQnhw8xSBO7oMbduFv5AbPxx-1i9MEjLq-IN-ZSW4ngGJpMk5kbVHshjcBGOalruXx57tju_6Boo81U2cqi1fBeHc_7zzwnMYwoSX5QI_8bk-q5EnOP5tWRtA0tBRnjMFGf-_dPoG_vO91fhU1sjo8=w1469-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Dương Hoài Phương",
                "company"     => "eSilicon Vietnam",
                "phone"       => "0933484618",
                "address"     => "PVFC Building at Lot A2.1, 30/04 street, Hai Chau District, Da Nang city",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3fSDWDljyxryAfJrlZTkid5A1a_RqDu-sWvUUOQJWqdGluRPhNJ9ib23VrNZiwIvSeZzru4ubt-E0aSPk7lBYMGs49x8I2i-tRdSPbRE07dGMG1kCYjFXWcycTw89NhqKo8HgiBWVHvOzyTItxh21tL=s300-no",
                "user_id"     => 18,
                "website"     => "http://www.esilicon.com/",
                "description" => "Gia công phần mềm cho Úc, Mỹ",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3cq2Pkr9lNrCoQ50DAup09XQ-uzfVV1VMtL74MJ4WlvqJ5Jjh6eACoXvz0M1Lmgc-L8e5TQPZXe1hjkJTEJk8U6kt6ijti7akW3w8d82_xNQgYANq_qnHfR9fOzc0V37346j3X7NT0rakKvjIimxfBY=w1473-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Phan Vinh Bính",
                "company"     => "Công ty TNHH Đầu tư và phát triển HPTek",
                "phone"       => "0383874672",
                "address"     => "15 Quang Trung, Quận Hải Châu, Thành Phố Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3e-QEe4i7_33jutUqI-9KHxOdTcIJAl0Du5P4FghFoOazxCu_lFNMfSKu6Pv_urDddk-HWyStdXXpPzltW-z1CfEnKqjI9Sfeg4Ej7Xvzwd_auFIhWnfpOZp3p6FOtpABIL7kI5Sk0oZwBrE5K-dy7d=w275-h183-no",
                "user_id"     => 19,
                "website"     => "http://hptek.vn/",
                "description" => "Gia công Phần mềm cho thị trường Mỹ Làm BPO",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3dGrKh7DHoDc_OT9ZWa-QTIAnIbYvMdij1_kmrym2j1odyWgijwO0yxriZJhnRNk8sWLbm8f9YAE8h8cUz_zVHc0XlufBy4mDZ91GWheKLbxlRU-kCuE73OGN5jRkpEctHY3mhH-0T9dQ3NTiWXcsHe=w1200-h675-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Võ Minh Thư",
                "company"     => "Công ty cổ phần Công nghệ DTT",
                "phone"       => "0982882201",
                "address"     => "Tòa Nhà Thành Quân 132-136 ・Lê Đình Lý - P. Vĩnh Trung - Thanh Khê - ĐN",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dAqlfcBM4UahK4RQ5tlo0QY4QqeNEKbZXjEeZdcf5nHe4nMG2sQCnwW-wnNFnVjICXOOIOiF3rG6G0lw1Ef5b5t2oog6Zvbw2PcDkpJ2znj6xe8KH17qWMiVQlFMt5y-mN0rIOfmD4AIjOKqITYHUJ=s979-no",
                "user_id"     => 20,
                "website"     => "http://dtt.vn/",
                "description" => "Gia công phần mềm",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3feRiKVfdfXJ8MSG8mMVu2FPumk_uj5SnBFGgofmYBHPzL4xSYt-62qQI4ediA1C_9dJbMPkmpawx8uZc40RYgZo-GVrBKFrCTVY1uKcn-5emziwZuM0gZOtnLI0wVeavjQ22UwNt-gIswM4s-JVZlR=w1000-h666-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Phan Huỳnh Ngọc Dung",
                "company"     => "SmartDev",
                "phone"       => "0908356130",
                "address"     => "Tầng 11- Tòa nhà Vĩnh Trung Plaza, 255 Hùng Vương, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3fzi3iGHIcpjWoXcEuC1H4yOXNTTZ_MLj5rOP5VbnWltyXL-k8PZO-r3JEk5lIm5YyROB0yt6NSBABd_lKQggPltE8qvIT2o3XaDY9fO7UqfziorcrxiAu31dAY3rCucgQzXGp65hIQN2ZkvsshWnPq=w251-h201-no",
                "user_id"     => 21,
                "website"     => "http://smartdev.vn/",
                "description" => "Gia công phần mềm - Thị trường Châu Âu",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3fK3oRN1Y7ngXjqdy6j4qC7rofxljsTCGknyXXCRRqcnLzabjwir8z3bIMTs2uOu00sJ4trq9j7jUjCqGov1leXMZmBHG3yoQx6IjPaJccNGmr3ghI8Om_0w1CKm7BxuyF6zVnyqsBhQe_yBbWJU867=w720-h480-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Nguyễn Vân Anh",
                "company"     => "Smoov Pte Ltd.",
                "phone"       => "0988805526",
                "address"     => "Tầng 4 - Tòa nhà bưu điện - 155 Nguyễn Văn Linh- Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dmZPnFHzht8FLqPFZHlhO203X6MKWJLm33JIWMeUmozWr-7AhlhBB0QgI269BmFurnMzC6eBom1lcifSMTXniKlFXLiRub6iW6x6IZzuG5KUTkXzT5rgSNNM1BypFieJDOhSwSJ7M859LCD7hHhemA=w400-h300-no",
                "user_id"     => 22,
                "website"     => "http://corporate.smoov.me",
                "description" => "Mobile App, Mobile Web",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3foqYqv_LE4upk23w2-fTqQTCN_3yab2bcaVmydq7Fdv7wPTpkc3xVJh_lL5Ois2e04gdgQOTZ2ieh5vsy4lMV16EwfeswYK5EgEkBIUgXxgVtU0fyhXoDdrmlxo4Oxr4cc9zdxUD9lCf1wOYEBC2te=w800-h541-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Nguyễn Thế Vinh",
                "company"     => "Công ty Co-well - CN Đà Nẵng",
                "phone"       => "0918740540",
                "address"     => "Tầng 4_Tòa nhà F-HOME_16 Lý Thường Kiệt, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3cpm51wGhPNEeIm0TswqEkiXpnFQcnajl8J6ufNqM51dmR_rb7Mw0wyH5QRg65d9QxLGhEngWoE7CTJ1O70XYZwIysuJZ5lEZEZqzISSM_DPkhn2iAd1cOtcnLYLEQ_bEtpSlU5jRJlirz-Dzk1O9SP=w400-h300-no",
                "user_id"     => 23,
                "website"     => "http://smartdev.vn",
                "description" => "Công ty 100% vốn đầu tư của Nhật, thuộc Tập đoàn SETA International Gia công cho Nhật Bản, Mỹ, Ireland",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3dixx1fOxawwM1NnEnVPdZWbUkSLF4v0w6HjBpYy6DEB5OtigZ2eMuSZZAZe3fS-QcWSWqP_xoAAQtHM7xKkF8apKIWxsJBWdwi1kc0JtLEtG6pliJdbrqKltCsoGs16O3TBc_NKz9FoenHkHOmDPYu=w1000-h663-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Nguyen Thi Thanh Bích",
                "company"     => "Công ty Phần mềm ARCH",
                "phone"       => "084984888",
                "address"     => "Tầng 17F , Tòa nhà số 2 Quang Trung, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dKnUVoAJo92zCKbPFxgrQZslcW9jZUNQxgRRmHbzvKZDHxWXRYT7mT4wNzZLnnEQcV2NtoYMFTxGqHDc0rVz5IP9N2u3k5qjpWb_X2c39Yzr62Jg12bORwkgKKrBCsQ2hPPMra8VCPuc2OS0KdEr5P=w262-h192-no",
                "user_id"     => 24,
                "website"     => "http://livepass.jp",
                "description" => "Công ty 100% vốn đầu tư của Nhật",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3c9oNzysVMCp8C8ZzPRFCSCTSRQUomf4WtCVwKP_CTiPijDoAfq7YKHMXh4FCbLIDMLMrXYPVskPjvdY2-qa614misiOZjqVOWpI-b4lQgasCT3Lyk-E9bL-hERoscU5N2tEB1GqThl-N8f1UH0eDpb=w1467-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Lê Minh Vương",
                "company"     => "Công ty cổ phần Xuất Khẩu Phần Mềm Tinh Vân - Chi nhánh Đà Nẵng",
                "phone"       => "0986338854",
                "address"     => "Tầng 11 tòa nhà Viettin Bank, Số 36 Trần Quốc Toản, Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3fk7VdGmJCNBP6QdBNZEE246BCWZMcNPGdEVpwLM50GER2k5vS83qK9cwDyeyTEZU2YhlhCosYE0Xzf1b1nEE1LkTHl8CxOK9i2K5wgpgzT0TBcATvhG77CMlIo77e0x25CzBEtXtDmnm3wv0r1uYn2=w267-h189-no",
                "user_id"     => 25,
                "website"     => "http://tinhvan.com",
                "description" => "Gia công và xuất khẩu phần mềm (PM) cho Mỹ, Đức, Singapore, Nhật",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3eWRkZ5dU7NPKyHQDgDJMS0t2hJ5ZGao3T8CMLTsVuMXfSvzxF2bRIe4uUv-NKIddFW0ioYcUPc567rdOxAuPCVfNhnzSNggGu7M02CH3e3nSwUqbPdw03BLUboBGUe4CxczK0DlU5GZmJB0_nG9rdV=w1567-h979-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Trương Gia Mẫn",
                "company"     => "Công ty Tin học và Xuất nhập khẩu BAP",
                "phone"       => "0908248238",
                "address"     => "Tầng 10 - Tòa nhà Thông tấn xã Việt Nam - Số 79-81 Quang Trung - Thành phố Đà Nẵng",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3cRt5ygJyXdJeLkvMhuk6WeOj3VTzfmQObTbCfNujSbBYqVGhSKUDXOxj5JOkPOTsELo6IcPPrUTfwvWQzil7delSoWXmsWQFpRJ0jqLk5HgFBxowkuz-4sLiqe3TDJ2o8M8DEKLyfOSdkCwmys8Iz1=s979-no",
                "user_id"     => 26,
                "website"     => "http://tinhvan.com",
                "description" => "Công ty cổ phần BAP chuyên làm offshore, game,app trên smartphone và web service cho thị trường nhật và việt nam.",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3ffgbNtY-t0tnCgLaNcDfVoJYFtlgGWLh74lGB2U0IgTKqry_tlYzdCsRJEWHmGE2U7kGu3mVEBIV6nV9h7ZUXcO3ny-zrTO2bq7IPu2akh1ci2mg_jLbUqI2TydoPyBVr9R54tVTNztvbdeegJ9jgw=w1200-h720-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Vương Thu Hiền",
                "company"     => "Công Ty TNHH Code Engine Studio Việt Nam ",
                "phone"       => "0919655801",
                "address"     => "59A Lê Lợi - Hải Châu - Đà Nẵng.",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dq7wwMx_rxKa46rfDxOjCgN6mE3WTPDOdJoFk_mfIdbIYBmhNUNxCQgGmO3ctayGwT2u1ZFb0HkzqaZJW6SZOTqXs__Sc8_yBknf0FB2outB4_EUlBvqAP7y6CrSrxdLUVDllZF96DXEr9XksQk40e=w267-h189-no",
                "user_id"     => 27,
                "website"     => "http://codeenginestudio.com/",
                "description" => "Gia công phần mềm thị trường tiếng Anh",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3c-HAZFK1ImU_duf3M7z-CEGqOAUruE2Ij8vWG8Af2vhyTCJ1YCbXNkRhnHq0o5pytAlSIRo7DJb26QwL5Glu17Hl81uSHUZfSugcT_3N9aRgZii4J0oMg3b-QORZJvCT3SOvJW6EzZFE_cHkEWie_7=w1000-h627-no?authuser=0",
                "active"      => 1,
                "order"       => 0,
            ],
            [
                "contact"     => "Châu Thị Kim Anh",
                "company"     => "Cosmo Medical Technology Co., Ltd",
                "phone"       => "0903112536",
                "address"     => "Section H, 17th Floor, Da Nang Software Park, No.2 Quang Trung str.,Hai Chau District, Da Nang City",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3dl7f9HvgfPSDIIpC-jn1gNCUbmpyd0Yszcyq_If_L1wNmHYthgCSB3E3UbYEggQgubf1orusrRQo4tBnSw0TVMLpYmdAJ7dkhkoZd3Hr20KUnyY_hw2I1MBR9HQIUQeGnvni3H1nuv-eIzEL4iJ30l=w768-h591-no",
                "user_id"     => 28,
                "website"     => "http://codeenginestudio.com/",
                "description" => "Công ty của Nhật",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3dL9DXhrB9gUAKkfGlFUWWAh8M3eI7911yz2Ocba6OwzhpsWN_CWVFDSe1YRddpcnBUNe6he9OZroFB1S8tNmKY7M-Q1jqO18NeljBXcAGES-meGCanIvRp-UPYaZ7A3cKYmsmY3cRZ7eZ80JEd4Yje=w1865-h979-no?authuser=0",
                "active"      => 0,
                "order"       => 0,
            ],
            [
                "contact"     => "Cao Minh Hiền",
                "company"     => "Aperia Solutions (Viet Nam)",
                "phone"       => "0909151486",
                "address"     => "Lô A2.1, Đường 30/4, Phường Hoà Cường Bắc, Quận Hải Châu, Đà Nẵng ",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3f6wS0YEbzS6dF0GOreV7igtNQo7MrWjMa6C4qJkoLZdqSQqeX_3RbHFaBYa_5iAthCKlJWgrodIcjqm1Sv9OX8uZqEmSj-AQYUWHrlsc2qqK26rskvxpd2Kr5PZyYH31LVG_U6k6gfS7et2yXwV1JM=s225-no",
                "user_id"     => 29,
                "website"     => "http://aperia.com/",
                "description" => "Doanh nghiệp 100% vốn đầu tư nước ngoài",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3c0jXcCQo_3n39CEOYEOn2bRx0_OZWBSO8qV-3Ow2hHYm3bbH3ZD1D_gvFGTs_h7m9pfcqW8cE8jk7-7p-9I7A4XslYk1fAD5q1gAKfIZMJ-nPbG1x6NWL-0W1QqZNTcpyKHTePV_9sRFnD8t5cyMnm=w1469-h979-no?authuser=0",
                "active"      => 0,
                "order"       => 0,
            ],
            [
                "contact"     => "Võ Thị Tuyết Vân",
                "company"     => "Lexim Global",
                "phone"       => "0919413401",
                "address"     => "Tầng 4, 223 Trần Phú, Quận Hải Châu, Đà Nẵng, Việt Nam",
                "avatar"      => "https://lh3.googleusercontent.com/pw/ACtC-3f14x0CnWkuammZk6gVxwvx36JHeAfz270wTd-Z6yTV0UuH4ypA0cTOt7Xog3vjbx8ZQdRjFqKktuP3u3e50kcLJLClns7PrGvj4z9s7WAHZpRkZvhwTLQQJVcVFcHS8TvngDGV9VFXdWaKo8XIj7Ed=s360-no",
                "user_id"     => 30,
                "website"     => "http://aperia.com/",
                "description" => "Gia công phần mềm cho Mỹ, VP chính ở Los Angeles",
                "photo"       => "https://lh3.googleusercontent.com/pw/ACtC-3cWYyqg22qB0hNyn-ap2ORo_HJsrEx8wwrtOW1kt8orDhn0jeVUN4bgqIehSy4C22UN8xsfJmytXURP00qX-Tb8D0WdWifk7yv-ILUEonRA2bTvcY-21yOpqcLB38gzSHKbTlkGvZjq0Eu63N6N2WoC=w1743-h979-no?authuser=0",
                "active"      => 0,
                "order"       => 0,
            ],
        ];
        foreach ($employers as $item) {
            App\Models\Employer::create([
                    'contact'     => $item['contact'],
                    'company'     => $item['company'],
                    'phone'       => $item['phone'],
                    'address'     => $item['address'],
                    'avatar'      => $item['avatar'],
                    'user_id'     => $item['user_id'],
                    'website'     => $item['website'],
                    'description' => $item['description'],
                    'photo'       => $item['photo'],
                    'active'      => $item['active'],
                    'order'       => $item['order'],
                ]
            );
        }
        Schema::enableForeignKeyConstraints();
    }
}
