<?php

use Illuminate\Database\Seeder;

class RecruitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('recruitments')->truncate();

        $recruitments = [
            [
                "vacancy"             => "Senior PHP Developer (English)",
                "quantity"            => 6,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3cSYIoux-wpKUFcrRWemEIghk4R8rK4JDtVizj2Qya2lSpDlT0k3FVK_07iwxSGrmE6FzADcV2ilsFnFjxcxYEYznBAZXUhh1NxA05ZALQPxtkfwC55vKnWxj4nO5yN3DGRrs7ndeJNVn4h0gnS4O3_=w630-h380-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 1,
                "city_id"             => 1,
                "career_id"           => 1,
                "salary_id"           => 1,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "Back-end Developer (.Net/Java/NodeJS)",
                "quantity"            => 5,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3dECdKVa9eOIydxjN1lMoZXPo954ONzVR6WiKuYGlQyrYedaDJiz6Hqwwxzxmf_fLgllupTK9W5cF67gXsZ-_sIJ7UGBA061F6cq8jEyV23m2JgKB0_q9lN6SKSAoA0dn3iGGqhTULNV6Y5DCMe1HiF=s225-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 2,
                "type_of_work_id"     => 2,
                "city_id"             => 2,
                "career_id"           => 2,
                "salary_id"           => 2,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "Jr/Sr React Native/ReactJS (Up to $2500)",
                "quantity"            => 3,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3dvwIFTwUwFPo-584b4236nB8_o4JvRjCYG1AQo1Q6sAQAwYwDEllxtsvWxwAgEiPlMaXHgqIghChUCd-nfBTpu8qfrw_igVlzxm0kgpn-gYxlKiZeYzlS9xkhMI11Dus_i4e96MeLZeHPFz7bt_xEI=w500-h429-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 3,
                "type_of_work_id"     => 3,
                "city_id"             => 3,
                "career_id"           => 3,
                "salary_id"           => 3,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "Middle/Senior Android Dev (Java, Kotlin)",
                "quantity"            => 4,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3dvwIFTwUwFPo-584b4236nB8_o4JvRjCYG1AQo1Q6sAQAwYwDEllxtsvWxwAgEiPlMaXHgqIghChUCd-nfBTpu8qfrw_igVlzxm0kgpn-gYxlKiZeYzlS9xkhMI11Dus_i4e96MeLZeHPFz7bt_xEI=w500-h429-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 4,
                "type_of_work_id"     => 4,
                "city_id"             => 4,
                "career_id"           => 4,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "iOS Developer (Swift, OOP, MVC)",
                "quantity"            => 1,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3f6OLBadR2jeqcvbv8ZEkrNptt2EuWY_532x2JynYCPffu8jlHtHbXPF4u_BzboqpiNe7a2T6iX1cGXEd6EumoHRs77GsoIH12S1zG950Kp023HXDU3QL8kopmUyPXB3wMO5eL_R3HfjnFSJeE9mzBG=s225-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 2,
                "city_id"             => 3,
                "career_id"           => 4,
                "salary_id"           => 5,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "02 PHP Developers (MySQL,NoSQL)",
                "quantity"            => 6,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3dGqId1Rt39NxcJDcQ4E9KdKVHZEtuz52O-6JKRS7h43ylVgu5yrP6icKQopqNP662yhmw_hRV-Y3cLPGWfo2aoXlvodPiGEbjRDks19Q_FLnJfFLxqgcWPx88mt5cVnVK2TGnQDJxE_ZC3h3glxxBW=w230-h219-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 4,
                "type_of_work_id"     => 2,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 1,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "05 C/C++ Developers",
                "quantity"            => 2,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3cgmJW4vQ61gR_O_uFTAgnjYgWUH9gr938K4yd5Z1wJIZFUaTt1tWNEvTf5ypvfWcRZeqLU21SF-YfDhIrAWUWdAYzjd6-QLp53P4v6GIBpy5htRoRIFCori1SRJ6Cl3gII8VGdAQK5O-F5y4RXzxob=s225-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 3,
                "type_of_work_id"     => 2,
                "city_id"             => 3,
                "career_id"           => 1,
                "salary_id"           => 2,
                "active"              => 1,
                "order"               => 1,
            ],
            [
                "vacancy"             => "05 Java Developers (Spring, J2EE)",
                "quantity"            => 12,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3eoGoLWYChEtVghAper2hWEtyI4LPLSVe1FXSD_rXPzls1jjWFQbIINCEc4BOU0pUYKpX3kNteI154ikiUHhs8s-GQPvCbpFw71d-Z3mQAUK3Wry6wCPoGCZdC5ZdThWh_g4UjWNIy1yKFYy2Mj6qks=s200-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 2,
                "city_id"             => 4,
                "career_id"           => 2,
                "salary_id"           => 3,
                "active"              => 1,
                "order"               => 1,
            ],
            [
                "vacancy"             => "Mobile Dev (Android/iOS/React Native)",
                "quantity"            => 11,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3cFUhOVReowQ-8Bs_pQJiqnAUT0m0bwSfzlb5fZITxH4zaz51ffdF4d2sQ0ZmWqdXuu5vhke-rqi71rjSqKvUqLYS-ojeHPLIGU9EifBt-noRv98k49nJXzLWA7tyP-HojvgF-oPtt_LA9uW9NDjNXq=s400-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 1,
                "city_id"             => 1,
                "career_id"           => 1,
                "salary_id"           => 1,
                "active"              => 1,
                "order"               => 1,
            ],
            [
                "vacancy"             => "Tester Manager (QA/ AC)",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3djux71wFBwsyGO5YTO0zdQVgMIkZBYWn0BeFTHX0GQG7UMR4HnAo5pmSnjNvqh06hQA4I1CfO2xUZTnPIa4xvnPTvrM4IvZm5L7vWDHhQ0Mval1Y6FLd3wJuKqSYHPu4kD8BK7HJdETF0bMcn395ow=s225-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 1,
            ],
            [
                "vacancy"             => "10 Mid-Senior-Tech Lead - PHP Developers",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3cO0sjyGIk1rDzdhw9ux_1e-gE6wxLG3O_dix1RXe_It9E1LxtEehhAAzAAj-ciBxxK0Q7vRTVBJ7woJDHL1bvqer6t4hxwSaNK72qge-8cSR9KqVx7nJK-3lE2vNmt-8KhEutvV9oCgFSLOllYGBI3=s979-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 1,
            ],
            [
                "vacancy"             => "Senior PHP Developer (PHP, MySQL)",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3d6u7x_gmexXSvrI5EIzRlro6iJQJUFVh9_bllJ8DfQSNvH3IEwVlMv1P9s3q2S-UvVEJDnspTh6MgKOrlbeFIlw7PcTt6sN002SahGAt7R9ItwkS_PurLYXDXXYWSPzwKSn_J1rTGhBYlZpfgXR8ef=w271-h186-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 1,
            ],
            [
                "vacancy"             => "3 PHP Dev (JavaScript, HTML5) Upto 1500$",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3fQtuDHrpcqfvTlqu6SfeZoiTR2pwMieZD3VDZnwN_JRGkiopH7R-TqtafwCUULQy9kddsUYuGkF1xd0AE85nTEm5-cWK_V5JdDyNvxqecIsT291u9lp1qGZE26dgtm3HC0OI0NhymwrD-vqxgvqtY7=s225-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "PHP Developer (Laravel, ReactJS)",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3dKH6hERP8VVvn6QSgbLhLqWlFRCTTYigudwOyxtiPxJ1HHTRqLuP0GC0UGzilTjCL7iEAgqMWez0v3xQe0Lp1yBbra6H0uNgID7KjS3cQd-rUCBmzPy12j82M7vn3VFWGr_3z9YenUcxohO7l2XJXS=w257-h196-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "Dev Operations Application (C#, PHP)",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3f_bKb_0VVEgP5cQdia8ye_2IZh6tVP5FCmWmqCyK8edfQgKGRtYstXBPHP5n2y6ddijQuT0_4TulbxAmIyicESauvrqVjvycfGMB750RgH7bJ9QeL0Dv4-stm8GF3HTLhKbug9bwbma8znLcfF0kSP=w500-h389-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "Web Engineer (Java, PHP, Japanese N2)",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3c6b7D53oTVa38aN_YixYtTyp5RJdapJseItIaHhmklJL_kiRGl2FeyU5ZIiZud60jp8bXV_DWsNsr7t0gVtoUWOjAZDI4bIngVzELl3ZJW03-Zw8AsFtu3fgh3-HkcnFwK7zYje0Qu_C0ZcDQEiwzd=s300-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "Web PHP Developer (Laravel, Wordpress)",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3en-akyroGmf_of_C4W31PschqE1lnnYA4Ug8aYndpssfJMDpyVklLZ4MU1xH3cU8fBKIBL2pXwBYcamLTEFPXdKsnPuoGsMKW0po1zVv3mhCcT6zxdqWZJkDdWGqQNcx9dRtWZ44jZJ79Aj0cLg5eE=s225-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 1,
                "order"               => 0,
            ],
            [
                "vacancy"             => "03 PHP Team Leaders",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3fxnJU50os1nCzo62PeyNkTw-w2E9mZETYyRV02xjFsvhCwEnrMU9Y6URDoBF7B9pFWexceHsIl0uUEAwZuvjd0qh_91dAC8r9fox7KjLrnnz3vueDC2QuCVfZrhMBjdX7OUHILAhVJ185MLLNrtgar=s400-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 0,
                "order"               => 0,
            ],
            [
                "vacancy"             => "02 PHP Developers (MySQL,NoSQL)",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3cGh2TvLWCdPEABlDhPgdlzdQj_Hxr3MBZ2JJMYAb_hKt5uivjZYIVbWpND1MLNFw36XRtpu5AETjkGDDBYwS7GglAtTRCxGuIpLw__ZDrwLdnLbgKNWMCwg2NOObEQWJccfVUpuislm4YeQU_YfH9l=w533-h400-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 0,
                "order"               => 0,
            ],
            [
                "vacancy"             => "Senior Dev/Team Leader (PHP, JavaScipt)",
                "quantity"            => 10,
                "end_date"            => "2020-08-11",
                "photo"               => "https://lh3.googleusercontent.com/pw/ACtC-3cvZ01M65_rGczTFIfzoUcdoG9b1XFYSvu7TrF8TXWDhaGicCcvitZrYQb_G1YthVfONyf5s-k44rmfkOa8osua_zw5P_L078C4cNBWLkIoofW_X9BJDCBSvtAP4XooUgdP3ZYFiUqpUCU4tshdg_UD=s225-no",
                "description"         => "- Thực hiện các dự án công nghệ của công ty, theo từng giai đoạn",
                "entitlements"        => "- Lương thoả thuận khi phỏng vấn",
                "job_requirements"    => "- Tốt nghiệp Cao đẳng / Đại học hoặc tương đương về chuyên ngành CNTT phần cứng, mạng, hoặc các bằng cấp liên quan.",
                "requested_documents" => "- Đơn xin việc hoặc CV xin viêc",
                "employer_id"         => 1,
                "rank_id"             => 1,
                "type_of_work_id"     => 3,
                "city_id"             => 2,
                "career_id"           => 1,
                "salary_id"           => 4,
                "active"              => 0,
                "order"               => 0,
            ],
        ];

        foreach ($recruitments as $item) {
            App\Models\Recruitment::create([
                    'vacancy'             => $item['vacancy'],
                    'quantity'            => $item['quantity'],
                    'end_date'            => $item['end_date'],
                    'photo'               => $item['photo'],
                    'description'         => $item['description'],
                    'entitlements'        => $item['entitlements'],
                    'job_requirements'    => $item['job_requirements'],
                    'requested_documents' => $item['requested_documents'],
                    'employer_id'         => $item['employer_id'],
                    'rank_id'             => $item['rank_id'],
                    'type_of_work_id'     => $item['type_of_work_id'],
                    'city_id'             => $item['city_id'],
                    'career_id'           => $item['career_id'],
                    'salary_id'           => $item['salary_id'],
                    'active'              => $item['active'],
                    'order'               => $item['order'],
                ]
            );
        }
        Schema::enableForeignKeyConstraints();
    }
}
