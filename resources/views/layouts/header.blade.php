<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <style>
    .beatwrn {
      width: 100%;
      height: 500px;
    }

    /*********footer*******************/
    . kilimanjaro_area {
      position: relative;
      z-index: 1;
    }

    .foo_top_header_one {
      background-color: #15151e;
      color: #fff;
    }

    .section_padding_100_70 {
      padding-top: 100px;
      padding-bottom: 70px;
    }

    .foo_top_header_one {
      color: #fff;
    }

    .kilimanjaro_part {
      margin-bottom: 30px;
    }

    .foo_top_header_one .kilimanjaro_part>h5 {
      color: #fff;
    }

    .kilimanjaro_part h4,
    .kilimanjaro_part h5 {
      margin-bottom: 30px;
    }

    .kilimanjaro_single_contact_info>p,
    .kilimanjaro_single_contact_info>h5,
    .kilimanjaro_blog_area>a,
    .foo_top_header_one .kilimanjaro_part>p {
      color: rgba(255, 255, 255, .5);
    }

    p,
    ul li,
    ol li {
      font-weight: 300;
    }

    ul {
      margin: 0;
      padding: 0;
    }

    .kilimanjaro_bottom_header_one {
      background-color: #111;
    }

    .section_padding_50 {
      padding: 50px 0;
    }

    .kilimanjaro_bottom_header_one p {
      color: #fff;
      margin: 0;
    }

    p,
    ul li,
    ol li {
      font-weight: 300;
    }

    .kilimanjaro_bottom_header_one a {
      color: inherit;
      font-size: 14px;
    }

    a,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-weight: 400;
    }

    .m-top-15 {
      margin-top: 15px;
    }

    ul {
      margin: 0;
      padding: 0;
    }

    .kilimanjaro_widget>li {
      display: inline-block;
    }

    p,
    ul li,
    ol li {
      font-weight: 300;
    }

    ol li,
    ul li {
      list-style: outside none none;
    }

    .kilimanjaro_widget a {
      border: 1px solid #333;
      border-radius: 6px;
      color: #888;
      display: inline-block;
      font-size: 13px;
      margin-bottom: 4px;
      padding: 7px 12px;
    }

    ul {
      margin: 0;
      padding: 0;
    }

    .kilimanjaro_links a {
      border-bottom: 1px solid #333;
      color: rgba(255, 255, 255, .5);
      display: block;
      font-size: 13px;
      margin-bottom: 5px;
      padding-bottom: 10px;
    }

    .kilimanjaro_links a {
      color: rgba(255, 255, 255, .5);
      font-size: 13px;
    }

    top-15 {
      margin-top: 15px;
    }

    .foo_top_header_one .kilimanjaro_part>h5 {
      color: #fff;
    }

    .kilimanjaro_part h4,
    .kilimanjaro_part h5 {
      margin-bottom: 30px;
    }

    .kilimanjaro_social_links>li {
      display: inline-block;
    }

    p,
    ul li,
    ol li {
      font-weight: 300;
    }

    .kilimanjaro_social_links a {
      border: 1px solid #333;
      border-radius: 6px;
      color: #888;
      display: inline-block;
      font-size: 13px;
      margin-bottom: 3px;
      padding: 7px 12px;
    }

    .kilimanjaro_blog_area .kilimanjaro_date {
      color: #27ae60;
      font-size: 13px;
      margin-bottom: 5px;
    }

    .kilimanjaro_blog_area>p {
      color: rgba(255, 255, 255, .5);
      line-height: 1.3;
      margin-bottom: 0;
    }

    .kilimanjaro_works>a {
      display: inline-block;
      float: left;
      position: relative;
      width: 33.33333333%;
      z-index: 1;
    }

    .kilimanjaro_thumb {
      left: 0;
      position: absolute;
      top: 0;
      width: 75px;
    }

    .kilimanjaro_links a i {
      padding-right: 10px;
    }

    /* :: 18.0 Footer Area CSS */

    .footer_area {
      position: relative;
      z-index: 1;
    }

    .footer_bottom p>i,
    .footer_bottom p>a:hover {
      color: #27ae60;
    }

    .social_links_area {
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      padding: 50px 0 30px 0;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    .social_links_area>a:hover {
      color: #27ae60;
    }

    .inline-style .social_links_area>a:hover {
      background-color: transparent;
      color: #27ae60;
      border: 0px solid transparent;
    }

    .single_feature:hover .feature_text h4 {
      color: #27ae60;
    }

    .kilimanjaro_blog_area {
      border-bottom: 1px solid #333;
      margin-bottom: 15px;
      padding: 0 0 15px 90px;
      position: relative;
      z-index: 1;
    }

    .kilimanjaro_links a {
      border-bottom: 1px solid #333;
      color: rgba(255, 255, 255, .5);
      display: block;
      font-size: 13px;
      margin-bottom: 5px;
      padding-bottom: 10px;
    }

    /* Credit to https://bootsnipp.com/snippets/X2XOv */
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Hospital</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>