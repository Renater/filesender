<?php

/*
 * FileSender www.filesender.org
 *
 * Copyright (c) 2009-2014, AARNet, Belnet, HEAnet, SURFnet, UNINETT
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * *	Redistributions of source code must retain the above copyright
 * 	notice, this list of conditions and the following disclaimer.
 * *	Redistributions in binary form must reproduce the above copyright
 * 	notice, this list of conditions and the following disclaimer in the
 * 	documentation and/or other materials provided with the distribution.
 * *	Neither the name of AARNet, Belnet, HEAnet, SURFnet and UNINETT nor the
 * 	names of its contributors may be used to endorse or promote products
 * 	derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */


  // Load default configuration
$default = array(
    'testing'   => false,   // TODO
    'debug'   => false,   // TODO
    'default_timezone' => 'Europe/London', // Default timezone to use
    'default_language' => 'en', // Default language to user
    'lang_browser_enabled' => true, // Take language from user's browser's accept-language header if provided
    'lang_userpref_enabled' => false, // Take lang from user profile
    'lang_url_enabled' => false, // Allow URL language switching (?lang=en for example)
    'lang_selector_enabled' => false, // Display language selector (requires lang_url_enabled = true)
    'lang_save_url_switch_in_userpref' => false, // Save lang switching in user preferences (requires lang_url_enabled = true and lang_userpref_enabled = true)
    'site_name' => 'FileSender', // Default site name to user
    'email_use_html' => true,   // By default, use HTML on mails
    'relay_unknown_feedbacks' => 'sender',   // Report email feedbacks with unknown type but with identified target (recipient or guest) to target owner
    'upload_display_bits_per_sec' => false, // By default, do not show bits per seconds 
    'upload_display_per_file_stats' => false, //
    'upload_force_transfer_resume_forget_if_encrypted' => false, //
    'upload_considered_too_slow_if_no_progress_for_seconds' => 0, // seconds
    'force_ssl' => true,
    'client_ip_key' => 'REMOTE_ADDR',
    
    'auth_sp_type' => 'saml',  // Authentification type
    'auth_sp_set_idp_as_user_organization' => false,
    'auth_sp_saml_email_attribute' => 'mail', // Get email attribute from authentification service
    'auth_sp_saml_name_attribute' => 'cn', // Get name attribute from authentification service
    'auth_sp_saml_uid_attribute' => 'eduPersonTargetedID', // Get uid attribute from authentification service
    'auth_sp_saml_authentication_source' => 'default-sp', // Get path  attribute from authentification service
    'auth_sp_shibboleth_email_attribute' => 'mail', // Get email attribute from authentification service
    'auth_sp_shibboleth_name_attribute' => 'cn', // Get name attribute from authentification service
    'auth_sp_shibboleth_uid_attribute' => 'eduPersonTargetedID', // Get uid attribute from authentification service
    
    'auth_remote_user_autogenerate_secret' => false,
    'auth_remote_signature_algorithm' => 'sha1',

    'auth_remote_user_enabled' => false, //disables remote user auth
    
    'aup_default' => false,
    'aup_enabled' => false,
    'mac_unzip_name' => 'The Unarchiver',
    'mac_unzip_link' => 'https://theunarchiver.com/',
    'ban_extension' => 'exe,bat',
    'extension_whitelist_regex' => '^[a-zA-Z0-9]*$', // a valid file extension must match this regex
    
    'max_transfer_size' => 107374182400,
    'max_transfer_recipients' => 50,
    'max_transfer_files' => 30,
    'max_transfer_days_valid' => 20,
    'default_transfer_days_valid' => 10,
    'failed_transfer_cleanup_days' => 7,
    'transfer_recipients_lang_selector_enabled' => false,
    'max_transfer_file_size' => 0,
    'max_transfer_encrypted_file_size' => 0,
    
    'max_guest_recipients' => 50,
    
    'max_legacy_file_size' => 2147483648,
    'legacy_upload_progress_refresh_period' => 5,
    'upload_chunk_size' => 5 * 1024 * 1024,
    'chunk_upload_security' => 'key',
    'download_chunk_size' => 5 * 1024 * 1024,
    
    'encryption_enabled' => true,
    'encryption_min_password_length' => 0,
    'encryption_generated_password_length' => 30,
    'encryption_generated_password_encoding' => 'base64',
    'upload_crypted_chunk_padding_size' => 16 + 16, // CONST the 2 times 16 are the padding added by the crypto algorithm, and the IV needed
    'upload_crypted_chunk_size' => 5 * 1024 * 1024 + 16 + 16, // the 2 times 16 are the padding added by the crypto algorithm, and the IV needed
    'crypto_iv_len' => 16, // i dont think this will ever change, but lets just leave it as a config
    'crypto_crypt_name' => "AES-CBC", // The encryption algorithm used
    'crypto_hash_name' => "SHA-256", // The hash used to convert password to hashencryption_enabled

    'terasender_enabled' => true,
    'terasender_disableable' => true,
    'terasender_start_mode' => 'multiple',
    'terasender_worker_count' => 6,
    'terasender_worker_max_chunk_retries' => 20,    
    'terasender_worker_xhr_timeout' => 3600000, // in ms, 1 hour for a chunk to complete by default.
    'terasender_worker_start_must_complete_within_ms' => 180000, // in ms, 3 minutes by default.
    'stalling_detection' => false,

    'testing_terasender_worker_uploadRequestChange_function_name' => '',

    'tmp_path' => FILESENDER_BASE.'/tmp/',

    
    // There are not so many options here, so they are listed
    // to make it easy for users to know what values might be interesting
    'storage_type' => 'filesystem',
//    'storage_type' => 'filesystemChunked',
    
    'storage_filesystem_path' => FILESENDER_BASE.'/files',
    'storage_filesystem_df_command' => 'df {path}',
    'storage_filesystem_tree_deletion_command' => 'rm -rf {path}',
    'storage_filesystem_ignore_disk_full_check' => false,
    'storage_filesystem_external_script' => FILESENDER_BASE.'/scripts/StorageFilesystemExternal/external.py',

    'storage_filesystem_shred_path' => FILESENDER_BASE.'/shredfiles',
    
    'email_from' => 'sender',
    'email_return_path' => 'sender',
    'email_subject_prefix' => '{cfg:site_name}:',
    
    'report_bounces' => 'asap',
    'report_bounces_asap_then_daily_range' => 15 * 60,

    'reports_show_ip_addr' => true,

    'statlog_lifetime' => 0,
    'statlog_log_user_organization' => false,
    'auditlog_lifetime' => 31,
    
    'storage_usage_warning' => 20,
    
    'report_format' => ReportFormats::INLINE,

    'valid_filename_regex' => '^[ \\/\\p{L}\\p{N}_\\.,;:!@#$%^&*)(\\]\\[_-]+$',
    'message_can_not_contain_urls_regex' => '',
//    'message_can_not_contain_urls_regex' => '(ftp:|http[s]*:|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})',

    'guest_limit_per_user' => 50,
    'guest_reminder_limit' => 50,
    'recipient_reminder_limit' => 50,

    'autocomplete' => false, 
    'autocomplete_min_characters' => 3,

    'upload_graph_bulk_display' => true, 
    'upload_graph_bulk_min_file_size_to_consider' => 1024*1024*1024, 


    'support_email' => '',

    'user_page' => array('lang'=>true,'auth_secret'=>true,'id'=>true,'created'=>true),

    // Logging
    'log_facilities' => array(
        array(
            'type' => 'file',
            'path' => FILESENDER_BASE.'/log/',
            'rotate' => 'hourly'
        )
    ),
    
    'site_logouturl' => function() {
        return Config::get('site_url').'?s=logout';
    },
    
    'show_storage_statistics_in_admin' => true,

    'cloud_s3_region'   => 'us-east-1',
    'cloud_s3_version'  => 'latest',
    'cloud_s3_endpoint' => 'http://localhost:8000',
    'cloud_s3_use_path_style_endpoint' => true,
    'cloud_s3_key'    => 'accessKey1',
    'cloud_s3_secret' => 'verySecretKey1',

    'disable_directory_upload' => true,
    'directory_upload_button_enabled' => true,

    'clientlogs_stashsize' => 10,
    'clientlogs_lifetime' => 10,

    'automatic_resume_number_of_retries' =>  20,
    'automatic_resume_delay_to_resume'   => 360,

    'guests_expired_lifetime' => 0,
    'translatable_emails_lifetime' => 30,
    'trackingevents_lifetime' => 90,

    'user_quota' => 0,

    'testsuite_run_locally' => false,

    'aggregate_statlog_lifetime' => false,
    'aggregate_statlog_send_report_days' => 0,
    'aggregate_statlog_send_report_email_address' => '',
    
    'transfer_options_not_available_to_export_to_client' => array('get_a_link'
                                                                , 'email_me_copies','email_me_on_expire'
                                                                , 'email_upload_complete', 'email_download_complete'
                                                                , 'email_daily_statistics', 'email_report_on_closing'
                                                                , 'enable_recipient_email_download_complete'
                                                                , 'add_me_to_recipients', 'redirect_url_on_complete'
    ),

    'header_x_frame_options' => 'sameorigin',
    'owasp_csrf_protector_enabled' => false,
    
    
    // see crypto_app.js for constants in the range crypto_key_version_constants
    // Generally higher is newer + better.
    'encryption_key_version_new_files' => 1,
    
    'transfer_options' => array(
        'email_me_copies' => array(
            'available' => true,
            'advanced' => true,
            'default' => false
        ),
        'email_me_on_expire' => array(
            'available' => true,
            'advanced' => false,
            'default' => true
        ),
        'email_upload_complete' => array(
            'available' => true,
            'advanced' => false,
            'default' => false
        ),
        'email_download_complete' => array(
            'available' => true,
            'advanced' => false,
            'default' => true
        ),
        'email_daily_statistics' => array(
            'available' => true,
            'advanced' => true,
            'default' => false
        ),
        'email_report_on_closing' => array(
            'available' => true,
            'advanced' => false,
            'default' => true
        ),
        'enable_recipient_email_download_complete' => array(
            'available' => true,
            'advanced' => true,
            'default' => true
        ),
        'add_me_to_recipients' => array(
            'available' => true,
            'advanced' => false,
            'default' => false
        ),
        'get_a_link' => array(
            'available' => true,
            'advanced' => false,
            'default' => true
        ),
        'redirect_url_on_complete' => array(
            'available' => false,
            'advanced' => true,
            'default' => ''
        ),
    ),

    'guest_upload_page_hide_unchangable_options' => false,

    'guest_options' => array(
        'email_upload_started' => array(
            'available' => true,
            'advanced' => false,
            'default' => true
        ),
        'email_upload_page_access' => array(
            'available' => true,
            'advanced' => false,
            'default' => false
        ),
        'valid_only_one_time' => array(
            'available' => true,
            'advanced' => true,
            'default' => false
        ),
        'does_not_expire' => array(
            'available' => true,
            'advanced' => true,
            'default' => false
        ),
        'can_only_send_to_me' => array(
            'available' => true,
            'advanced' => false,
            'default' => false
        ),
        'email_guest_created' => array(
            'available' => false,
            'advanced' => true,
            'default' => true
        ),
        'email_guest_created_receipt' => array(
            'available' => false,
            'advanced' => true,
            'default' => true
        ),
        'email_guest_expired' => array(
            'available' => false,
            'advanced' => true,
            'default' => true
        ),
    ),
);
