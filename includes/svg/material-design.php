<?php

function _pit_md_expand_more( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}

function _pit_md_expand_less( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}

function _pit_md_close( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}

function _pit_md_account_circle( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}

function _pit_md_add( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}

function _pit_md_add_circle_outline( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>';
}

function _pit_md_menu( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>';
}


function _pit_md_more_horiz( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>';
}

function _pit_md_chevron_left( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}

function _pit_md_chevron_right( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}

function _pit_md_copyright( $class = '', $id = '')
{
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M24 0v24H0V0h24z" id="a"/></defs><clipPath id="b"><use overflow="visible" xlink:href="#a"/></clipPath><path clip-path="url(#b)" d="M10.08 10.86c.05-.33.16-.62.3-.87s.34-.46.59-.62c.24-.15.54-.22.91-.23.23.01.44.05.63.13.2.09.38.21.52.36s.25.33.34.53.13.42.14.64h1.79c-.02-.47-.11-.9-.28-1.29s-.4-.73-.7-1.01-.66-.5-1.08-.66-.88-.23-1.39-.23c-.65 0-1.22.11-1.7.34s-.88.53-1.2.92-.56.84-.71 1.36S8 11.29 8 11.87v.27c0 .58.08 1.12.23 1.64s.39.97.71 1.35.72.69 1.2.91 1.05.34 1.7.34c.47 0 .91-.08 1.32-.23s.77-.36 1.08-.63.56-.58.74-.94.29-.74.3-1.15h-1.79c-.01.21-.06.4-.15.58s-.21.33-.36.46-.32.23-.52.3c-.19.07-.39.09-.6.1-.36-.01-.66-.08-.89-.23-.25-.16-.45-.37-.59-.62s-.25-.55-.3-.88-.08-.67-.08-1v-.27c0-.35.03-.68.08-1.01zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>';
}

function _pit_md_remove( $class = '', $id = '') {
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M19 13H5v-2h14v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}


function _pit_md_comment( $class = '', $id = '') {
    echo '<svg class="'. $class .'" id="'. $id .'" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>';
}

function _pit_md_calander( $class = '', $id = '') {
    echo '<svg class="'. $class .'" id="'. $id .'" x="0px" y="0px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23,24H1c-0.6,0-1-0.5-1-1V1c0-0.6,0.5-1,1-1H23c0.6,0,1,0.5,1,1V23C24,23.5,23.5,24,23,24z"/><rect x="8" y="2.1" fill="#FFFFFF" width="15.1" height="1.5"/><rect x="0.9" y="4.7" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="20.5" y="4.7" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="17.2" y="4.7" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="14" y="4.7" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="10.7" y="4.7" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="7.5" y="4.7" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="4.2" y="4.7" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="0.9" y="8.4" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="20.5" y="8.4" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="17.2" y="8.4" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="14" y="8.4" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="10.7" y="8.4" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="7.5" y="8.4" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="4.2" y="8.4" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="0.9" y="12.1" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="20.5" y="12.1" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="17.2" y="12.1" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="14" y="12.1" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="10.7" y="12.1" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="7.5" y="12.1" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="4.2" y="12.1" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="1.1" y="15.8" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="20.7" y="15.8" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="17.4" y="15.8" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="14.1" y="15.8" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="10.9" y="15.8" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="7.6" y="15.8" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="4.3" y="15.8" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="1.1" y="19.5" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="7.6" y="19.5" fill="#FFFFFF" width="2.4" height="2.4"/><rect x="4.3" y="19.5" fill="#FFFFFF" width="2.4" height="2.4"/></svg>';
}
