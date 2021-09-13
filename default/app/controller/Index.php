<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        $data='task_progress, task_staff, tb_account_guide, tb_account_qualification_auth, tb_attachment, tb_audit_auth, tb_chat_group, tb_chatting_records, tb_company_department, tb_company_friend_link, tb_company_honor, tb_company_invoice, tb_company_qualification, tb_company_qualification_auth, tb_company_visualize, tb_contribute, tb_custom_folder, tb_custom_folder_authority, tb_finish_tack_rule, tb_free_trial_white_list, tb_group_content, tb_group_content_read, tb_group_member, tb_guide, tb_ipa, tb_manage_limiting, tb_new_attention, tb_new_receive_tack, tb_new_subtack, tb_new_task, tb_org_slideshow, tb_org_useful, tb_own_share_title_info, tb_own_useful, tb_report, tb_screen_label, tb_tack_rule_configuration, tb_task_contract, tb_task_tender, tb_team_member, tb_team_member_details, tb_vr_info, tb_websocket_user_channel, td_api_log, td_area, td_platform_useful, td_sys_label, td_sys_message, thumbs, user, user_account, user_account_details, user_commission_account, user_common, user_coupon, user_level, user_task, version, video_swtich, visiting, visiting_info, visiting_info_template, website, withdrawals_record, wx_form_id, wx_notice';
        $data=explode(',',$data);
        return json_encode($data);

     }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
