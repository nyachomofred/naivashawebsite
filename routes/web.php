<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ViewsController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/discipline', 'ViewsController@discipline')->name('about us');
Route::get('/school-anthem', 'ViewsController@anthem')->name('anthem');
Route::get('/academics', 'ViewsController@academics')->name('academics');
Route::get('/sciences', 'ViewsController@science')->name('science');
Route::get('/mathematics', 'ViewsController@mathematics')->name('mathematics');
Route::get('/technical-and-applied', 'ViewsController@technical')->name('technical');
Route::get('/humanities', 'ViewsController@humanities')->name('humanities');
Route::get('/english', 'ViewsController@english')->name('english');
Route::get('/kiswahili', 'ViewsController@kiswahili')->name('kiswahili');
Route::get('/examinations', 'ViewsController@examinations')->name('examinations');
Route::get('/guidance', 'ViewsController@guidance')->name('guidance');
Route::get('/cocurriculor', 'ViewsController@cocurriculor')->name('cocurriculor');
Route::get('/history', 'ViewsController@history')->name('history');
Route::get('/galary', 'ViewsController@galary')->name('galary');
Route::get('/events', 'ViewsController@events')->name('events');
Route::post('/viewEvent','ViewsController@viewEvent');
Route::get('/contact', 'ViewsController@contact')->name('contact');
Route::post('/sendMessage', 'ViewsController@sendMessage')->name('sendMessage');






Route::group(['middleware'=>['web','auth']],function(){
Route::get('/admin7','AdminController@admin');
Route::get('/welcomeMessage','AdminController@welcomeMessage');
Route::get('/newRedirect','AdminController@newRedirect');
Route::post('/searchUser','UserProfileController@searchUser');

Route::get('/listUsers','UserProfileController@listUsers');
Route::post('/editUser','UserProfileController@editUser');
Route::post('/updateUser','UserProfileController@updateUser');
Route::get('/userRoles','UserProfileController@userRoles');
Route::post('/editUserRole','UserProfileController@editUserRole');
Route::post('/updateUserRole','UserProfileController@updateUserRole');
Route::post('/suspend','UserProfileController@suspend');
Route::post('/deleteUser','UserProfileController@deleteUser');

Route::get('/pages','AdminController@pages');
Route::post('/editPage','AdminController@editPage');
Route::post('/searchPage','AdminController@searchPage');

Route::post('/updateHome','AdminController@updateHome');
Route::post('/updateBackgroundImage','AdminController@updateBackgroundImage');
Route::post('/updateDisciplineImage','AdminController@updateDisciplineImage');
Route::post('/updateTraditionImage','AdminController@updateTraditionImage');
Route::post('/updateDiscipline','AdminController@updateDiscipline');

Route::post('/updateAnthemBackgroundImage','AdminController@updateAnthemBackgroundImage');
Route::post('/updateAnthemImage','AdminController@updateAnthemImage');
Route::post('/updateAnthem','AdminController@updateAnthem');

Route::post('/updateAcademicBackgroundImage','AdminController@updateAcademicBackgroundImage');
Route::post('/updateSubjectsImage','AdminController@updateSubjectsImage');
Route::post('/updateAcademics','AdminController@updateAcademics');

Route::post('/updateScienceBackgroundImage','AdminController@updateScienceBackgroundImage');
Route::post('/updateScienceImage','AdminController@updateScienceImage');
Route::post('/updateScience','AdminController@updateScience');

Route::post('/updateMathematicsBackgroundImage','AdminController@updateMathematicsBackgroundImage');
Route::post('/updateMathematicsImage','AdminController@updateMathematicsImage');
Route::post('/updateMathematics','AdminController@updateMathematics');

Route::post('/updateTechnicalBackgroundImage','AdminController@updateTechnicalBackgroundImage');
Route::post('/updateTechnicalImage','AdminController@updateTechnicalImage');
Route::post('/updateTechnical','AdminController@updateTechnical');

Route::post('/updateHumanitiesBackgroundImage','AdminController@updateHumanitiesBackgroundImage');
Route::post('/updateHumanitiesImage','AdminController@updateHumanitiesImage');
Route::post('/updateHumanities','AdminController@updateHumanities');

Route::post('/updateEnglishBackgroundImage','AdminController@updateEnglishBackgroundImage');
Route::post('/updateEnglishImage','AdminController@updateEnglishImage');
Route::post('/updateEnglish','AdminController@updateEnglish');

Route::post('/updateKiswahiliBackgroundImage','AdminController@updateKiswahiliBackgroundImage');
Route::post('/updateKiswahiliImage','AdminController@updateKiswahiliImage');
Route::post('/updateKiswahili','AdminController@updateKiswahili');

Route::post('/updateExaminationsBackgroundImage','AdminController@updateExaminationsBackgroundImage');
Route::post('/updateExaminationsImage','AdminController@updateExaminationsImage');
Route::post('/updateExaminations','AdminController@updateExaminations');

Route::post('/updateGuidanceBackgroundImage','AdminController@updateGuidanceBackgroundImage');
Route::post('/updateGuidanceImage','AdminController@updateGuidanceImage');
Route::post('/updateGuidance','AdminController@updateGuidance');

Route::post('/updateHistoryBackgroundImage','AdminController@updateHistoryBackgroundImage');
Route::post('/updateHistoryImage','AdminController@updateHistoryImage');
Route::post('/updateHistoryImage1','AdminController@updateHistoryImage1');
Route::post('/updateHistory','AdminController@updateHistory');

Route::post('/updateCocurriculorBackgroundImage','AdminController@updateCocurriculorBackgroundImage');
Route::post('/updateCocuriculor','AdminController@updateCocuriculor');

Route::get('/sliders','SliderController@sliders');
Route::post('/editSlider','SliderController@editSlider');

Route::post('/createHomeSlider', function () {
    return view('admin.createHomeSlider');
});
Route::post('/createHomeSlider1','SliderController@createHomeSlider1');
Route::post('/deleteHomeSlider','SliderController@deleteHomeSlider');
Route::post('editHomeSlider','SliderController@editHomeSlider');
Route::post('updateSliderImage','SliderController@updateSliderImage');
Route::post('updateHomeSlider','SliderController@updateHomeSlider');

Route::get('/settings','UserProfileController@settings');
Route::post('/updateGeneralSettings','UserProfileController@updateGeneralSettings');
Route::post('/updateGeneralSettings1','UserProfileController@updateGeneralSettings1');
Route::get('/socialSettings','UserProfileController@socialSettings');
Route::post('/updateSocialSettings','UserProfileController@updateSocialSettings');
Route::post('/updateSocialSettings1','UserProfileController@updateSocialSettings1');
Route::get('/imagesSettings','UserProfileController@imagesSettings');
Route::post('/updateImageSettings','UserProfileController@updateImageSettings');
Route::post('/updateImageSettings1','UserProfileController@updateImageSettings1');
Route::get('/staffSettings','UserProfileController@staffSettings');
Route::post('/seachStaff','UserProfileController@seachStaff');
Route::post('/editStaff','UserProfileController@editStaff');
Route::post('/updateStaff','UserProfileController@updateStaff');
Route::post('/updateStaffImage','UserProfileController@updateStaffImage');

Route::get('/adminClubs','ContentController@adminClubs');
Route::post('/editClub','ContentController@editClub');
Route::post('/createSectionA', function () {
    return view('admin.createSectionA');
});
Route::post('/createClubs','ContentController@createClubs');
Route::post('/deleteClubs','ContentController@deleteClubs');
Route::post('/editClubs','ContentController@editClubs');
Route::post('/editClubs1','ContentController@editClubs1');
Route::post('/createSectionB', function () {
    return view('admin.createSectionB');
});
Route::post('/createSectionC', function () {
    return view('admin.createSectionC');
});
Route::post('/createSectionD', function () {
    return view('admin.createSectionD');
});

Route::post('/createSocieties', function () {
    return view('admin.createSocieties');
});

Route::get('/adminTeams','ContentController@adminTeams');
Route::post('/createTeam', function () {
    return view('admin.createTeam');
});
Route::post('/createTeam1','ContentController@createTeam1');
Route::post('/editTeam','ContentController@editTeam');
Route::post('/updateTeamImage','ContentController@updateTeamImage');
Route::post('/updateTeam','ContentController@updateTeam');
Route::post('/deleteTeam','ContentController@deleteTeam');

Route::get('/partnerUniversies','ContentController@partnerUniversies');
Route::post('/createPartner', function () {
    return view('admin.createPartner');
});
Route::post('/createPartner1','ContentController@createPartner1');
Route::post('/editPartner','ContentController@editPartner');
Route::post('/updatePartnerImage','ContentController@updatePartnerImage');
Route::post('/updatePartner','ContentController@updatePartner');
Route::post('/deletePartner','ContentController@deletePartner');

Route::get('/adminGalary','ContentController@adminGalary');
Route::post('/updateGalBackImage','ContentController@updateGalBackImage');
Route::post('/addGalaryImage','ContentController@addGalaryImage');
Route::post('/deleteGalaryImage','ContentController@deleteGalaryImage');
Route::get('/messages','ContentController@messages');
Route::post('/searchMessage','ContentController@searchMessage');
Route::post('/ReadMessage','ContentController@ReadMessage');
Route::get('deleteMessage/{id}','ContentController@deleteMessage');

Route::get('/profile','UserProfileController@profile');
Route::post('/updateProfile','UserProfileController@updateProfile');
Route::get('/changePassword', function () {
    return view('admin.changePassword');
});
Route::post('/changePassword1','UserProfileController@changePassword1');
Route::get('/changeProfilePicture', function () {
    return view('admin.changeProfilePicture');
});
Route::post('/changeProfilePicture1','UserProfileController@changeProfilePicture1');


Route::post('/deleteAboutUsSlider','SliderController@deleteAboutUsSlider');
Route::post('/createAboutUsSlider', function () {
    return view('admin.createAboutUsSlider');
});
Route::post('/createAboutUsSlider1','SliderController@createAboutUsSlider1');
Route::post('/deleteMathemathicssliderSlider','SliderController@deleteMathemathicssliderSlider');
Route::post('/createMathemathicssliderSlider', function () {
    return view('admin.createMathemathicssliderSlider');
});
Route::post('/createMathemathicssliderSlider1','SliderController@createMathemathicssliderSlider1');
Route::post('/deleteLaguagessliderSlider','SliderController@deleteLaguagessliderSlider');
Route::post('/createLaguagessliderSlider', function () {
    return view('admin.createLaguagessliderSlider');
});
Route::post('/createLaguagessliderSlider1','SliderController@createLaguagessliderSlider1');
Route::post('/deleteHumanitesSlider','SliderController@deleteHumanitesSlider');
Route::post('/createHumanitiesUsSlider', function () {
    return view('admin.createHumanitiesUsSlider');
});
Route::post('/createHumanitiesUsSlider1','SliderController@createHumanitiesUsSlider1');
Route::post('/deleteScienceSlider','SliderController@deleteScienceSlider');
Route::post('/createScienceSlider', function () {
    return view('admin.createScienceSlider');
});
Route::post('/createScienceSlider1','SliderController@createScienceSlider1');
Route::post('/deleteTechnicalSlider','SliderController@deleteTechnicalSlider');
Route::post('/createTechnicalSlider', function () {
    return view('admin.createTechnicalSlider');
});
Route::post('/createTechnicalSlider1','SliderController@createTechnicalSlider1');
Route::post('/deleteBoardingSlider','SliderController@deleteBoardingSlider');
Route::post('/createBoardingSlider', function () {
    return view('admin.createBoardingSlider');
});
Route::post('/createBoardingSlider1','SliderController@createBoardingSlider1');
Route::post('/deleteGamesSlider','SliderController@deleteGamesSlider');
Route::post('/createGamesSlider', function () {
    return view('admin.createGamesSlider');
});
Route::post('/createGamesSlider1','SliderController@createGamesSlider1');
Route::post('/deleteGuidanceSlider','SliderController@deleteGuidanceSlider');
Route::post('/createGuidanceSlider', function () {
    return view('admin.createGuidanceSlider');
});
Route::post('/createGuidanceSlider1','SliderController@createGuidanceSlider1');
Route::post('/deleteClubsSlider','SliderController@deleteClubsSlider');
Route::post('/createClubsSlider', function () {
    return view('admin.createClubsSlider');
});
Route::post('/createClubsSlider1','SliderController@createClubsSlider1');
Route::post('/deleteStaffSlider','SliderController@deleteStaffSlider');
Route::post('/createStaffSlider', function () {
    return view('admin.createStaffSlider');
});
Route::post('/createStaffSlider1','SliderController@createStaffSlider1');
Route::post('/deleteEventsSlider','SliderController@deleteEventsSlider');
Route::post('/createEventsSlider', function () {
    return view('admin.createEventsSlider');
});
Route::post('/createEventsSlider1','SliderController@createEventsSlider1');
Route::get('/ActivityLog','UserProfileController@ActivityLog');
Route::post('/searchActivityLog','UserProfileController@searchActivityLog');
Route::get('/clearActivityLog','UserProfileController@clearActivityLog');
Route::get('/resetPassword','UserProfileController@resetPassword');
Route::post('/resetPassword1','UserProfileController@resetPassword1');
Route::post('/searchResetPassword','UserProfileController@searchResetPassword');


Route::get('/menu','MenuController@menu');
Route::get('/subMenu','MenuController@subMenu');
Route::post('/editMenu','MenuController@editMenu');
Route::post('/editMenu1','MenuController@editMenu1');
Route::get('/createMainMenu', function () {
    return view('admin.createMainMenu');
});
Route::post('/createMainMenu1','MenuController@createMainMenu1');
Route::get('/createDropDownMenu', function () {
    return view('admin.createDropDownMenu');
});
Route::post('/createDropDownMenu1','MenuController@createDropDownMenu1');
Route::get('/createSubMenu','MenuController@createSubMenu');
Route::post('/createSubMenu1','MenuController@createSubMenu1');
Route::get('/deleteMainMenu','MenuController@deleteMainMenu');
Route::get('/deleteSubMenu','MenuController@deleteSubMenu');
Route::post('/deleteMainMenu1','MenuController@deleteMainMenu1');
Route::post('/deleteSubMenu1','MenuController@deleteSubMenu1');


Route::get('/adminEvents','EventsController@adminEvents');
Route::post('/searchEvent','EventsController@searchEvent');
Route::get('/createEvent', function () {
    return view('admin.createEvent');
});
Route::post('/createNewEvent','EventsController@createNewEvent');
Route::post('/deleteEvent','EventsController@deleteEvent');
Route::post('/editEvent','EventsController@editEvent');
Route::post('/updateEvent','EventsController@updateEvent');
Route::post('/deleteEventImage','EventsController@deleteEventImage');
Route::post('/upateEventImage','EventsController@upateEventImage');
Route::post('/deleteEventImage1','EventsController@deleteEventImage1');
Route::post('/addEventImage','EventsController@addEventImage');



Route::get('/logout1', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout','AdminController@logout');

});