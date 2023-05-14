@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/new.js') }}"></script>
@endsection

@section('content')
<div class="container-new page page-1">
    <div class="section section-1">
        <div class="buttons-left buttons-left-1">
            <div class="random_age"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            <div class="random_height"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            <div class="random_hair"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            <div class="random_eyes"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
        </div>
        <div class="sheet sheet-1">
            <div class="next"></div>
            <input type="text" maxlength="40" name="name" onkeydown="return /[a-z ]/i.test(event.key)" onblur="if (this.value == '') {this.value = '';}">
            <select name="races">
                <option value="0">- Raza -</option>
                @foreach ($race as $r)
                    <option value="{{$r->id_race}}">{{$r->name}}</option>
                }
                @endforeach
            </select>
            <select name="category">
                <option value="0">- Clase -</option>
                @foreach ($category as $c)
                    <option value="{{$c->id_category}}">{{$c->name}}</option>
                @endforeach
            </select>
            <input type="text" name="profession" value="Selecciona clase" disabled>
            <input type="text" name="estate" disabled>
            <input type="text" name="previous_professions" disabled>
            <input type="text" name="status" disabled>
            <input type="text" name="age" disabled>
            <input type="text" name="height" disabled>
            <input type="text" name="hair" disabled>
            <input type="text" name="eyes" disabled>
        </div>
        <div class="buttons-right buttons-right-1">
        </div>
    </div>
    <div class="section section-2">
        <div class="buttons-left buttons-left-2">
            <div class="random_roll"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            <div class="random_characteristics"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            <div class="roll_characteristics">
                <div class="roll_ha"></div>
                <div class="roll_hp"></div>
                <div class="roll_f"></div>
                <div class="roll_r"></div>
                <div class="roll_ini"></div>
                <div class="roll_ag"></div>
                <div class="roll_des"></div>
                <div class="roll_i"></div>
                <div class="roll_v"></div>
                <div class="roll_em"></div>
            </div>
            <div class="career_characteristics">
                <div class="career_characteristics-1 career-1"></div>
                <div class="career_characteristics-2 career-2"></div>
                <div class="career_characteristics-3 career-3"></div>
                <div class="career_characteristics-4 career-4"></div>
            </div>
        </div>
        <div class="sheet sheet-2">
            <input type="text" name="ha_ini" disabled>
            <input type="text" name="hp_ini" disabled>
            <input type="text" name="f_ini" disabled>
            <input type="text" name="r_ini" disabled>
            <input type="text" name="ini_ini" disabled>
            <input type="text" name="ag_ini" disabled>
            <input type="text" name="des_ini" disabled>
            <input type="text" name="i_ini" disabled>
            <input type="text" name="v_ini" disabled>
            <input type="text" name="em_ini" disabled>
            <input type="text" name="ha_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="hp_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="f_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="r_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="ini_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="ag_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="des_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="i_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="v_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="em_imp" disabled maxlength="2" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
            <input type="text" name="ha_total" disabled>
            <input type="text" name="hp_total" disabled>
            <input type="text" name="f_total" disabled>
            <input type="text" name="r_total" disabled>
            <input type="text" name="ini_total" disabled>
            <input type="text" name="ag_total" disabled>
            <input type="text" name="des_total" disabled>
            <input type="text" name="i_total" disabled>
            <input type="text" name="v_total" disabled>
            <input type="text" name="em_total" disabled>
            <input type="text" name="em_total" disabled>
            <input type="text" name="destiny" disabled>
            <input type="text" name="fortune" disabled>
            <input type="text" name="resilience" disabled>
            <input type="text" name="resolution" disabled>
            <input type="text" name="motivation" disabled>
            <input type="text" name="exp_actual" disabled>
            <input type="text" name="exp_spent" disabled>
            <input type="text" name="exp_total" disabled>
            <input type="text" name="movement" disabled>
            <input type="text" name="walk" disabled>
            <input type="text" name="run" disabled>
        </div>
        <div class="buttons-right buttons-right-2">
            <div class="content_buttons">
                <div class="destiny_up"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
                <div class="destiny_down"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
                <div class="resilience_up"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
                <div class="resilience_down"><button class="btn btn-primary" disabled>Selecciona raza</button></div>
            </div>
            <div class="content_info">
                <div class="extra_points" data-points="0" data-wasted-resilience="0" data-wasted-destiny="0"></div>
            </div>
        </div>
    </div>
    <div class="section section-3">
        <div class="buttons-left buttons-left-3">       
        </div>
        <div class="sheet sheet-3">
            <input type="text" name="endurance" data-value="0" disabled>
            <input type="text" name="art" data-value="0" disabled>
            <input type="text" name="athletics" data-value="0" disabled>
            <input type="text" name="calm" data-value="0" disabled>
            <input type="text" name="charisma" data-value="0" disabled>
            <input type="text" name="animal_charisma" data-value="0" disabled>
            <input type="text" name="melee" data-value="0" disabled>
            <input type="text" name="close_combat" data-value="0" disabled>
            <input type="text" name="drive" data-value="0" disabled>
            <input type="text" name="to_drink_alcohol" data-value="0" disabled>
            <input type="text" name="entertain" data-value="0" disabled>
            <input type="text" name="gossip" data-value="0" disabled>
            <input type="text" name="climb" data-value="0" disabled>
            <input type="text" name="endurance_imp" data-value="0" disabled>
            <input type="text" name="art_imp" data-value="0" disabled>
            <input type="text" name="athletics_imp" data-value="0" disabled>
            <input type="text" name="calm_imp" data-value="0" disabled>
            <input type="text" name="charisma_imp" data-value="0" disabled>
            <input type="text" name="animal_charisma_imp" data-value="0" disabled>
            <input type="text" name="melee_imp" data-value="0" disabled>
            <input type="text" name="close_combat_imp" data-value="0" disabled>
            <input type="text" name="drive_imp" data-value="0" disabled>
            <input type="text" name="to_drink_alcohol_imp" data-value="0" disabled>
            <input type="text" name="gossip_imp" data-value="0" disabled>
            <input type="text" name="entertain_imp" data-value="0" disabled>
            <input type="text" name="climb_imp" data-value="0" disabled>
            <input type="text" name="endurance_hab" data-value="0" disabled>
            <input type="text" name="art_hab" data-value="0" disabled>
            <input type="text" name="athletics_hab" data-value="0" disabled>
            <input type="text" name="calm_hab" data-value="0" disabled>
            <input type="text" name="charisma_hab" data-value="0" disabled>
            <input type="text" name="animal_charisma_hab" data-value="0" disabled>
            <input type="text" name="melee_hab" data-value="0" disabled>
            <input type="text" name="close_combat_hab" data-value="0" disabled>
            <input type="text" name="drive_hab" data-value="0" disabled>
            <input type="text" name="to_drink_alcohol_hab" data-value="0" disabled>
            <input type="text" name="gossip_hab" data-value="0" disabled>
            <input type="text" name="entertain_hab" data-value="0" disabled>
            <input type="text" name="climb_hab" data-value="0" disabled>
            <input type="text" name="dodge" data-value="0" disabled>
            <input type="text" name="intimidate" data-value="0" disabled>
            <input type="text" name="intuition" data-value="0" disabled>
            <input type="text" name="play" data-value="0" disabled>
            <input type="text" name="leadership" data-value="0" disabled>
            <input type="text" name="mount" data-value="0" disabled>
            <input type="text" name="orientation" data-value="0" disabled>
            <input type="text" name="perception" data-value="0" disabled>
            <input type="text" name="bargain" data-value="0" disabled>
            <input type="text" name="row" data-value="0" disabled>
            <input type="text" name="stealth" data-value="0" disabled>
            <input type="text" name="bribe" data-value="0" disabled>
            <input type="text" name="survival" data-value="0" disabled>
            <input type="text" name="dodge_imp" data-value="0" disabled>
            <input type="text" name="intimidate_imp" data-value="0" disabled>
            <input type="text" name="intuition_imp" data-value="0" disabled>
            <input type="text" name="play_imp" data-value="0" disabled>
            <input type="text" name="leadership_imp" data-value="0" disabled>
            <input type="text" name="mount_imp" data-value="0" disabled>
            <input type="text" name="orientation_imp" data-value="0" disabled>
            <input type="text" name="perception_imp" data-value="0" disabled>
            <input type="text" name="bargain_imp" data-value="0" disabled>
            <input type="text" name="row_imp" data-value="0" disabled>
            <input type="text" name="stealth_imp" data-value="0" disabled>
            <input type="text" name="bribe_imp" data-value="0" disabled>
            <input type="text" name="survival_imp" data-value="0" disabled>
            <input type="text" name="dodge_hab" data-value="0" disabled>
            <input type="text" name="intimidate_hab" data-value="0" disabled>
            <input type="text" name="intuition_hab" data-value="0" disabled>
            <input type="text" name="play_hab" data-value="0" disabled>
            <input type="text" name="leadership_hab" data-value="0" disabled>
            <input type="text" name="mount_hab" data-value="0" disabled>
            <input type="text" name="orientation_hab" data-value="0" disabled>
            <input type="text" name="perception_hab" data-value="0" disabled>
            <input type="text" name="bargain_hab" data-value="0" disabled>
            <input type="text" name="row_hab" data-value="0" disabled>
            <input type="text" name="stealth_hab" data-value="0" disabled>
            <input type="text" name="bribe_hab" data-value="0" disabled>
            <input type="text" name="survival_hab" data-value="0" disabled>
            <div class="advanced_skills_list">
                <div class="advanced_skill">
                    <input type="text" class="advanced_skills_name" name="advanced_skills_name_1" disabled>
                    <input type="text" class="advanced_skills_characteristics" name="advanced_skills_characteristics_1" disabled>
                    <input type="text" class="advanced_skills_characteristics_level" data-value="0" name="advanced_skills_characteristics_level_1" disabled>
                    <input type="text" class="advanced_skills_imp" name="advanced_skills_imp_1" disabled>
                    <input type="text" class="advanced_skills_hab" name="advanced_skills_hab_1" disabled>
                </div>
            </div>
        </div>
        <div class="buttons-right buttons-right-3">       
        </div>
    </div>
    <div class="section section-4">
        <div class="buttons-left buttons-left-4">       
        </div>
        <div class="sheet sheet-4">
            <div class="talents_list">
                <div class="talent">
                    <input type="text" class="talent_name" name="talent_name_1" disabled>
                    <input type="text" class="talent_level" data-value="0" name="talent_level_1" disabled>
                    <input type="text" class="talent_description" name="talent_description_1" disabled>
                </div>
            </div>
            <textarea name="self_short_ambitions"></textarea>
            <textarea name="self_long_ambitions"></textarea>
            <input name="group_name" disabled />
            <textarea name="group_short_ambitions" disabled></textarea>
            <textarea name="group_long_ambitions" disabled></textarea>
            <textarea name="group_members" disabled></textarea>
        </div>
        <div class="buttons-right buttons-right-4">       
        </div>
    </div>
</div>
<div class="container-new page page-2">
    <div class="section section-5">
        <div class="buttons-left buttons-left-5">       
        </div>
        <div class="sheet sheet-5">
            <div class="next"></div>
        </div>
        <div class="buttons-right buttons-right-5">       
        </div>
    </div>
</div>      
@endsection
