<?php /* Template Name: DoctorsPage */ ?>

<!DOCTYPE html>
<html>


<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="John Doe">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="http://localhost/wp-content/themes/twentyseventeen/node_modules/angular-iran-national-id/dist/angular-iran-national-id.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<script src="http://localhost/wp-content/themes/twentyseventeen/md-time-picker.js"></script>
<link rel="stylesheet" href="http://localhost/wp-content/themes/twentyseventeen/md-time-picker.css">



<body ng-app="myApp" ng-controller="formCtrl" ng-cloak dir="rtl" lang="fa">

<style>
    body {
        background-color: ghostwhite;
        font-family: IRAN;
        direction: rtl;
        min-height: 2000px;
    }

    @font-face {
        font-family: IRAN;
        src: url('IRAN.woff2');
    }

    .row {
        margin-right: 7px;
    }

    md-tabs.md-default-theme md-ink-bar, md-tabs md-ink-bar {
        color: rgb(103, 190, 199);
    }

    md-input-container.md-default-theme.md-input-invalid .md-input, md-input-container.md-input-invalid .md-input {
        border-color: rgb(253, 82, 82);
    }

    .rightCol {
        padding-top: 112px;
    }

    md-icon {
        color: #FF5252;
    }

    .selectInput {

        margin-right: 15% ;

    }
    .pt-50 {
        padding-top: 55px;
    }

    md-radio-button {
        text-align: right;
    }
.col-md-5 {
    padding-right: 8px;

}

    md-input-container:not(.md-input-has-value) input:not(:focus), md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-ampm-field, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-day-field, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-hour-field, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-millisecond-field, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-minute-field, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-month-field, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-second-field, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-text, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-week-field, md-input-container:not(.md-input-has-value) input:not(:focus)::-webkit-datetime-edit-year-field {
        color: black;
    }

    .demo-header-searchbox {
        width: 312px;
    }

    .md-button {
        border-radius: 20px;
        min-height: 55px;
    !important;
    }

    md-card {
        border-radius: 35px;
    }

    .md-list-item {
        min-height: 150px;
    }

    md-list-item .md-no-style.md-button {
        min-height: 64px;
    }

    .md-display-2 {
        font-weight: 600;
        text-align: right;
        color: rgb(119, 118, 118);
    }

    md-content {

        background-color: ghostwhite;
    }
</style>
<div ng-app="myApp" ng-controller="formCtrl">
    <div class="container">
        <div class="row pt-50">

            <div class="col-md-4 rightCol">
                <md-card>
                    <md-card-content>
                        <md-list-item ng-repeat="cat in doctorsFullDetail" ng-click="selectDoctor($index)"
                                      class="noright">
                            <img class="ml-3" width="20px" height="20px"
                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAATaSURBVGhDzZl/iGZTGMdn/bbEqhURWmw2RVukbf1clMhSeLVpGO/8fN/JlPGHaDEUtggpP/9Qu5K022Y3REtJbdSw0jQbZVn7x0TNmg1ZO83O8vlez7vdOT3XzH3vdd556tv59Zzv8z33nnvuuee2lWFDQ0NH9PX1XdPb2/sE2NrT0zMC9oLfKP9NOgUmyI+RbiddT9pPerZRtN4QdAuCfpTgvKDvNNjc399/utG1xhCxCkGHQoFNYLRSqRxjtPGNgbzkiGoKXV1dFxttfEPA1lBQGgx0xPyuCNtCdHd335yQtsIQusMT1UCegYBaQtoKQ+i4I+gg9ROG7fLjaq9o1NH+e+CfgLanEtLY1tHRcVyGoOQuZBk+WXfnTXOJa7w3ljpiNJCd9Xr9FGFgYOAk+fKeOapRR/uNGf0+TYhjG8GvC8WEaNwd8rM+I/juSohjG4E7PEFp5BzIAVwXyD+qEfyRUEwIxCXTjNSdTiF4l5xm9PEMca+Db8H7iNhIuon0Y8MX4CvqdoEfDDut7jP5kH5AulGwul/BpUYfz9gfnWjZUowtypHt7e0nWDGu8X5YwtXUtKmQv5OV7A7K11O+ivIllC9kap0rUF6uOrWbz2r1M+gZWmi0cQ0xjxK8jA1jAvh+Jl1m9NFsAYH3h2KKAs4XjT+OVavVUz0hRcFA3rUQcYw39rGekBKw3kLEM67eXkdIUTxt9PGMgWxxhBQCq9xNRh/PCFwNhRQBF+YPTVmjj2cEXwjG0mKKgIGsM+r4hoCy7sov4GSjbY0h4K2UoGYwyd1YZXStM30pIkQbQE/kbJjkAb/HqFpv2vBpjoMpR6wLfPcwiMuNYn6ZNokIfAehf4XCG9AASB8aHBw83rrNX9N2nEHdiuhB8BzCdSZc0+6X5vhfgXkNsUfzlXc+4nWUWtH8J01M23yS1aQrSBdbl/lhCL5IwpVH3JOU5/yMgH34r1RfDS76QbZd0ZfBTxKEmM1Wv9wEzgn026NFQs8K+XEwTf0w6drOzs4zkmBlm07KCVAHI46gKabQmfIj/3nYngV8H7Y+3mmMTiu3cHGulE9h0w8cSHsh1UoTBjsM2h+XP+ndXnsI/A6QJs8J6XC6LQS+2xiQFonmjKu8FBL9XXIDBBjTaaK9HL3z4BnAZ4PFuMxrD4G//nity72ppPNtdPwzJPwv4H+7+pI+47WnoefMfDd47VnAf8ecFwWc76PTwZBkNtDvE+t/HtCDm+X3pfzILyaf+7ufPrsVQxyZhoOOdnIPwnCoVqtdYDwfOu0JuBv3ms+DXvscMZp5rsb8XoTDvqBDLiDuBXGR6gep1z6u5VaLCPndnk8OvJYIDw3ixxznXIBjQkJtE+mtdM9aLHegOTFZr9fPSsSnDfJvHOdmUDW+tel6ytNMqyVqo/xRuq1ZwFkX3wyjsqwDt2HxaXUhP5mqf0/12tKQL+WEEs3JVJ5hnmMBJKfqBNKWPqnjbtxgcZ5v1BUF/K+Ic4Z5jgXwhjgJdLWVv7ddgg4sCi0oafzvAyHAfq2CxjsKHlCeu9KT9iuKGHdEuF+8BOtsDIr8145f04gyEIJ8B+3hr0HKKz2/IogyEIGpdK3RayBvez5FEG0gBNokbmcpLgXuQKjUz82y8Spfe+eQrgnqy8Jd/6pva/sHLSDKaG+IBnQAAAAASUVORK5CYII=">
                            <p>{{ cat.name }}</p>
                            <md-icon class="material-icons" ng-click="doSecondaryAction($event)"
                                     class="md-secondary md-hue-3" style="z-index: 11;">delete


                        </md-list-item>
                    </md-card-content>
                </md-card>
                <div class="col-md-11" style="padding-right: 30px;">
                    <md-button class="md-raised md-primary" ng-click="addDoctor()" ng-if="IsVisible!=true"
                               style="width: 100%">افزودن پزشک
                    </md-button>
                    <div ng-show="IsVisible">
                        <md-input-container>
                            <label>نام پزشک</label>
                            <input type="text" name="name" ng-model="currentDoctor.name" required style="width: 260px">
                        </md-input-container>
                        <md-button class="md-raised md-primary" ng-click="newDoctor()" style="width: 100%">ذخیره
                        </md-button>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form class="form-inline" action="/action_page.php">
                    <div class="col-md-12">
                        <md-content>
                            <md-tabs md-dynamic-height md-border-bottom>
                                <md-tab label="عمومی">
                                    <md-content>
                                        <h1 class="md-display-2"> تنظیمات عمومی</h1>
                                        <md-card>
                                            <md-card-content>
                                                <form name="userForm" novalidate>
                                                    <div layout="column">

                                                        <div class="container">
                                                            <div class="row">
                                                                <md-input-container class="col-md-2">
                                                                    <md-radio-group ng-model="data.group1">
                                                                        <md-radio-button value="M" class="md-primary">
                                                                            آقای
                                                                        </md-radio-button>
                                                                        <md-radio-button value="F">خانم
                                                                        </md-radio-button>
                                                                    </md-radio-group>
                                                                </md-input-container>
                                                                <md-input-container class="col-md-9">
                                                                    <label>نام کامل پزشک</label>
                                                                    <input type="text" name="name"
                                                                           ng-model="currentDoctor.name"
                                                                           required>
                                                                    <div ng-messages="userForm.name.$error">
                                                                        <div ng-message="required">
                                                                            لطفا نام کامل پزشک را وارد کنید
                                                                        </div>
                                                                    </div>
                                                                </md-input-container>
                                                            </div>
                                                        </div>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <md-input-container>
                                                                                <label>نظام پزشکی</label>
                                                                                <input ng-model="currentDoctor.DrId"
                                                                                       type="phone">
                                                                            </md-input-container>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <md-input-container>
                                                                                <label>کدملی</label>
                                                                                <input minlength="10" maxlength="10"
                                                                                       islet-iran-national-id required
                                                                                       ng-model="currentDoctor.iranNationalId"
                                                                                       type="کدملی">
                                                                            </md-input-container>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <md-input-container>
                                                                                <label>تلفن همراه</label>
                                                                                <input ng-model="currentDoctor.phone"
                                                                                       type="phone">
                                                                            </md-input-container>
                                                                        </div>
                                                                        <md-input-container class="col-md-9">
                                                                            <label>آدرس</label>
                                                                            <input type="text" name="name"
                                                                                   ng-model="currentDoctor.address"
                                                                                   required>
                                                                            <div ng-messages="userForm.name.$error">
                                                                                <div ng-message="required">
                                                                                    لطفا آدرس مطب را وارد کنید
                                                                                </div>
                                                                            </div>
                                                                        </md-input-container>
                                                                        <div class="col-md-3">
                                                                            <md-input-container>
                                                                                <label>تلفن مطب</label>
                                                                                <input ng-model="currentDoctor.workPhone"
                                                                                       type="phone">
                                                                            </md-input-container>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <md-input-container class="selectInput">
                                                                    <label>خدمات</label>
                                                                    <md-select ng-model="selectedServices"
                                                                               md-on-close="clearSearchTerm()"
                                                                               data-md-container-class="selectdemoSelectHeader"
                                                                               multiple>
                                                                        <md-select-header class="demo-select-header">
                                                                            <input ng-model="searchTerm"
                                                                                   type="search"
                                                                                   placeholder="جست و جو..."
                                                                                   class="demo-header-searchbox md-text">
                                                                        </md-select-header>
                                                                        <md-optgroup label="doctors">
                                                                            <md-option ng-value="s.id"
                                                                                       ng-repeat="s in currentDoctor.services | filter:searchTerm">
                                                                                {{s.id}} سرویس شماره
                                                                            </md-option>
                                                                        </md-optgroup>
                                                                    </md-select>
                                                                </md-input-container>
                                                            </div>
                                                        </div>
                                                        <md-input-container class="md-block">
                                                            <label>توضیحات</label>
                                                            <textarea ng-model="user.biography" md-maxlength="150"
                                                                      rows="5" md-select-on-focus></textarea>
                                                        </md-input-container>
                                                        </md-input-container>
                                                    </div>
                                                </form>
                                            </md-card-content>
                                        </md-card>
                                    </md-content>
                                </md-tab>
                                <md-tab label="خدمات">

                                    <md-content >
                                        <h1 class="md-display-2">تنظیمات خدمات</h1>
                                        <md-card>
                                            <md-card-content>

                                                <div class="col-md-12">
                                                    <div layout="column" ng-repeat="doc in currentDoctor.services">
                                                        <div flex>
                                                            <div layout="row">
                                                                <label class="col-md-4">دسته سرویس</label>
                                                                <label class="col-md-4">نام سرویس</label>
                                                                <label class="col-md-4">
                                                                    <md-checkbox ng-model="checked"
                                                                                 style=" margin-top: 20px;">
                                                                        {{doc.catId}}
                                                                    </md-checkbox>
                                                                </label>
                                                            </div>
                                                            <div flex ng-readonly="checked">
                                                                <md-list-item
                                                                        ng-click="navigateTo(setting.extraScreen, $event)"
                                                                        ng-repeat="s in currentDoctor.services">
                                                                    <md-icon md-svg-icon="{{ s.icon}}"></md-icon>
                                                                    <p> {{ s.id }} </p>
                                                                    <md-switch class="md-secondary"
                                                                               ng-model="s.status"></md-switch>
                                                                    <md-input-container
                                                                            style="margin-top: 5%;margin-left: 6%;">
                                                                        <label>قیمت</label>
                                                                        <input ng-model="s.price">
                                                                    </md-input-container>
                                                                </md-list-item>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </md-card-content>
                                        </md-card>
                                    </md-content>

                                </md-tab>
                                <md-tab label="زمانبندی">
                                    <md-content >
                                        <h1 class="md-display-2">تنظیمات زمانبندی</h1>
                                        <md-card>
                                            <md-card-content >

                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-1"></div>
                                                        <md-list class="col-md-5">
                                                            <md-list-item ng-repeat="s in currentDoctor.schedule">
                                                                <md-input-container
                                                                        style="margin-top: 5%;margin-left: 6%;">
                                                                    <div>
                                                                        <label> شروع {{s.dayName}}:</br></label>
                                                                    </div>
                                                                    <md-time-picker id="timePick1"
                                                                                    ng-init="setStartTime($index)"
                                                                                    ng-model="s.startTime"
                                                                                    message="message"
                                                                                    read-only="readonly"
                                                                                    mandatory="required" no-meridiem
                                                                                    no-auto-switch
                                                                                    style="direction: ltr">
                                                                    </md-time-picker>
                                                                </md-input-container>
                                                            </md-list-item>
                                                        </md-list>
                                                        <md-list class="col-md-5">

                                                            <md-list-item ng-repeat="f in currentDoctor.schedule">
                                                                <md-input-container
                                                                        style="margin-top: 5%;margin-left: 6%;">
                                                                    <div>
                                                                        <label> پایان {{f.dayName}}:</br></label>
                                                                    </div>
                                                                    <md-time-picker id="timePick2"
                                                                                    ng-init="setEndTime($index)"
                                                                                    ng-model="f.endTime"
                                                                                    message="message"
                                                                                    read-only="readonly"
                                                                                    mandatory="required" no-meridiem
                                                                                    no-auto-switch
                                                                                    style="direction: ltr">
                                                                    </md-time-picker>
                                                                </md-input-container>
                                                            </md-list-item>
                                                        </md-list>
                                                        <div class="col-md-1"></div>
                                                    </div>
                                                </div>
                                            </md-card-content>
                                        </md-card>

                                    </md-content>
                                </md-tab>
                            </md-tabs>
                        </md-content>
                    </div>
                </form>
                <div class="col-md-12">
                    <section layout="row" layout-sm="column col-md-12 p-0" layout-align="center " layout-wrap>
                        <md-button class="md-raised col-md-5">لغو</md-button>
                        <md-button class="md-raised col-md-5 md-primary">ذخیره</md-button>
                    </section>
                </div>
            </div>
        </div>


        <script>
            var app = angular.module('myApp', ['ngMaterial', 'ngMessages', 'md.time.picker', 'angular-iran-national-id']);
            app.controller('formCtrl', function ($scope) {
                $scope.selectedServices = []
                $scope.doctor = [{id: 25, name: 'ali'},
                    {id: 26, name: 'reza'},
                    {id: 27, name: 'mamad'},
                    {id: 29, name: 'naghi'}];
                $scope.time = [];

                $scope.checked
                $scope.message = {
                    hour: 'Hour is required',
                    minute: 'Minute is required',
                    meridiem: 'Meridiem is required'
                }
                $scope.readonly = false;
                $scope.required = true;


                $scope.doctorsFullDetail = [
                    {
                        id: '1',
                        name: 'خشایار مرتضوی',
                        email: "khashmort@gmail.com",
                        phone: "09120059443",
                        workPhone: "22657890",
                        DrId: '57564452',
                        address: "تهران, اولین کوچه دست راست, پلاک 23 طبقه 2",
                        iranNationalId: '0440470366',
                        services: [
                            {id: 1, price: 5000, duration: 30, catId: 1, status: true},
                            {id: 2, price: 7000, duration: 30, catId: 1, status: false},
                            {id: 3, price: 3500, duration: 30, catId: 2, status: false},
                            {id: 4, price: 9000, duration: 30, catId: 3, status: true},
                        ],
                        schedule: [
                            {dayName: 'شنبه', dayIndex: 1, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'یکشنبه', dayIndex: 2, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'دوشنبه', dayIndex: 3, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'سه شنبه', dayIndex: 4, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'چهارشنبه', dayIndex: 5, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'پنج شنبه', dayIndex: 6, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'جمعه', dayIndex: 7, startTime: '08:00', endTime: "18:00"}],
                        holidays: [new Date(), new Date(), new Date()]
                    },
                    {
                        id: '2',
                        name: 'علی توسلی',
                        email: "alirezat92@gmail.com",
                        phone: "09127900752",
                        workPhone: "0212790752",
                        DrId: '9584512',
                        iranNationalId: '0440470366',
                        address: "تهران, اولین کوچه دست راست, پلاک 99 طبقه 2",
                        services: [
                            {id: 1, price: 5000, duration: 30, catId: 1, status: true},
                            {id: 2, price: 7000, duration: 30, catId: 1, status: false},
                            {id: 3, price: 3500, duration: 30, catId: 2, status: false},
                            {id: 4, price: 9000, duration: 30, catId: 3, status: true},
                        ],
                        schedule: [
                            {dayName: 'شنبه', dayIndex: 1, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'یکشنبه', dayIndex: 2, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'دوشنبه', dayIndex: 3, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'سه شنبه', dayIndex: 4, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'چهارشنبه', dayIndex: 5, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'پنج شنبه', dayIndex: 6, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'جمعه', dayIndex: 7, startTime: '08:00', endTime: "18:00"}],

                        holidays: [new Date(), new Date(), new Date()]
                    },
                    {
                        id: '3',
                        name: 'محمد رضایی',
                        email: "mamad@test.com",
                        phone: "09123541654",
                        workPhone: "0213541654",
                        DrId: '57412352',
                        iranNationalId: '0440470366',
                        address: "تهران, اولین کوچه دست راست, پلاک 23 طبقه 2",
                        services: [
                            {id: 1, price: 5000, duration: 30, catId: 1, status: true},
                            {id: 2, price: 7000, duration: 30, catId: 1, status: false},
                            {id: 3, price: 3500, duration: 30, catId: 2, status: false},
                            {id: 4, price: 9000, duration: 30, catId: 3, status: true},
                        ],
                        schedule: [
                            {dayName: 'شنبه', dayIndex: 1, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'یکشنبه', dayIndex: 2, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'دوشنبه', dayIndex: 3, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'سه شنبه', dayIndex: 4, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'چهارشنبه', dayIndex: 5, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'پنج شنبه', dayIndex: 6, startTime: '08:00', endTime: "18:00"},
                            {dayName: 'جمعه', dayIndex: 7, startTime: '08:00', endTime: "18:00"}],

                        holidays: [new Date(), new Date(), new Date()]
                    }];
                $scope.currentDoctor = $scope.doctorsFullDetail[0]
                for (var i = 0; i < $scope.currentDoctor.services.length; i++) {
                    if ($scope.currentDoctor.services[i].status === true) {
                        $scope.selectedServices.push($scope.currentDoctor.services[i].id)
                    }
                }
                $scope.IsVisible = false;
                $scope.addDoctor = function () {
                    $scope.IsVisible = $scope.IsVisible ? false : true;

                }
                $scope.newDoctor = function () {
                    tmp = {
                        id: '3',
                        name: $scope.doctorName,
                        email: "dsdsd",
                        phone: "02163541654",
                        DrId: '57452',
                        services: [
                            {id: 1, price: 5000, duration: 30, catId: 1, status: true},
                            {id: 2, price: 7000, duration: 30, catId: 1, status: false},
                            {id: 3, price: 3500, duration: 30, catId: 2, status: true},
                            {id: 4, price: 9000, duration: 30, catId: 3, status: true},
                        ],
                        schedule: [
                            {dayIndex: 1, startTime: '08:00', endTime: "18:00"},
                            {dayIndex: 2, startTime: '08:00', endTime: "18:00"},
                            {dayIndex: 3, startTime: '08:00', endTime: "18:00"},
                            {dayIndex: 4, startTime: '08:00', endTime: "18:00"},
                            {dayIndex: 5, startTime: '08:00', endTime: "18:00"},
                            {dayIndex: 6, startTime: '08:00', endTime: "18:00"},
                            {dayIndex: 7, startTime: '08:00', endTime: "18:00"}],
                        holidays: [new Date(), new Date(), new Date()]
                    };
                    $scope.doctorsFullDetail.push(tmp);
                    $scope.IsVisible = false;
                }
                $scope.selectDoctor = function (a) {
                    $scope.selectedServices = []
                    a = parseInt(a);
                    $scope.currentDoctor = $scope.doctorsFullDetail[a];
                    for (var i = 0; i < $scope.currentDoctor.services.length; i++) {
                        if ($scope.currentDoctor.services[i].status === true) {
                            $scope.selectedServices.push($scope.currentDoctor.services[i].id)
                        }

                    }
                }

                $scope.doSecondaryAction = function (event) {
                    $mdDialog.show(
                        $mdDialog.alert()
                            .title('Secondary Action')
                            .textContent('Secondary actions can be used for one click actions')
                            .ariaLabel('Secondary click demo')
                            .ok('Neat!')
                            .targetEvent(event)
                    );
                };
                $scope.submit = function () {

                    $http.post("http://a.ir/api/vreateservice.php", $scope.serviceFullObject)
                        .then(function (response) {


                        });
                }
                $scope.setStartTime = function (t) {
                    $scope.currentDoctor.schedule[t].startTime = new Date("2019-12-31T" + $scope.currentDoctor.schedule[t].startTime + ":00.280")

                }

                $scope.setEndTime = function (k) {
                    $scope.currentDoctor.schedule[k].endTime = new Date("2019-12-31T" + $scope.currentDoctor.schedule[k].endTime + ":00.280")

                }
            });
            app.config(function ($mdThemingProvider) {
                $mdThemingProvider
                    .theme('default')
                    .primaryPalette('blue-grey')
                    .accentPalette('red')
                    .warnPalette('red')
                    .backgroundPalette('grey');
            });
        </script>
    </div>
</div>
</body>
</html>
