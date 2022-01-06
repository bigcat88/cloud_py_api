<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core.proto

namespace GPBMetadata;

class Core
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�$

core.protoOCA.Cloud_Py_API.Proto"
Empty"�
TaskInitReply
appName (	
modName (	
modPath (	
funcName (	
args (	@
config (20.OCA.Cloud_Py_API.Proto.TaskInitReply.cfgOptions{

cfgOptions/
log_lvl (2.OCA.Cloud_Py_API.Proto.logLvl

dataFolder (	
frameworkAppData (	
userId (	"Z
TaskSetStatusRequest3
st_code (2".OCA.Cloud_Py_API.Proto.taskStatus
error (	"!
TaskExitRequest
result (	"b
TaskLogRequest/
log_lvl (2.OCA.Cloud_Py_API.Proto.logLvl
module (	
content (	"&
fsId
userId (	
fileId ("@
FsGetInfoRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId"�
FsGetInfoReply,
fileId (2.OCA.Cloud_Py_API.Proto.fsId
is_dir (
is_local (
mimetype (	
name (	
internal_path (	
abs_path (	
size (
permissions	 (
mtime
 (
checksum (	
	encrypted (
etag (	
	ownerName (	
	storageId (	
mountId ("<
FsListRequest+
dirId (2.OCA.Cloud_Py_API.Proto.fsId"D
FsListReply5
nodes (2&.OCA.Cloud_Py_API.Proto.FsGetInfoReply"=
FsReadRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId"U
FsReadReply5
resCode (2$.OCA.Cloud_Py_API.Proto.fsResultCode
content ("t
FsCreateRequest1
parentDirId (2.OCA.Cloud_Py_API.Proto.fsId
name (	
is_file (
content ("O
FsWriteRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId
content ("?
FsDeleteRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId"`
FsMoveRequest,
fileId (2.OCA.Cloud_Py_API.Proto.fsId

targetPath (	
bCopy ("@
FsReply5
resCode (2$.OCA.Cloud_Py_API.Proto.fsResultCode"-
	whereExpr
type (	

expression (	"(
	str_alias
name (	
alias (	"�
DbSelectRequest2
columns (2!.OCA.Cloud_Py_API.Proto.str_alias/
from (2!.OCA.Cloud_Py_API.Proto.str_alias?
joins (20.OCA.Cloud_Py_API.Proto.DbSelectRequest.joinType2
whereas (2!.OCA.Cloud_Py_API.Proto.whereExpr
groupBy (	C
havings (22.OCA.Cloud_Py_API.Proto.DbSelectRequest.havingExpr
orderBy (	

maxResults (
firstResult	 ([
joinType
name (	
	fromAlias (	
join (	
alias (	
	condition (	.

havingExpr
type (	

expression (	"@
DbSelectReply
rowCount (
error (	
handle ("�
DbCursorRequest9
cmd (2,.OCA.Cloud_Py_API.Proto.DbCursorRequest.cCmd
handle ("+
cCmd	
FETCH 
	FETCH_ALL	
CLOSE"�
DbCursorReply
error (	
columnsName (	E
columnsData (20.OCA.Cloud_Py_API.Proto.DbCursorReply.columnData,

columnData
bPresent (
data ("�
DbExecRequest9
type (2+.OCA.Cloud_Py_API.Proto.DbExecRequest.rType

table_name (	
columns (	
values (2
whereas (2!.OCA.Cloud_Py_API.Proto.whereExpr"+
rType

INSERT 

UPDATE

DELETE"3
DbExecReply
nAffectedRows (
error (	"t
ServerCommand8
id (2,.OCA.Cloud_Py_API.Proto.ServerCommand.cmd_id")
cmd_id
TASK_NOTHING 
	TASK_STOP*=
logLvl	
DEBUG 
INFO
WARN	
ERROR	
FATAL*s

taskStatus

ST_SUCCESS 
ST_IN_PROGRESS
ST_INIT_ERROR
ST_EXCEPTION
ST_ERROR

ST_UNKNOWN*X
fsResultCode
NO_ERROR 
NOT_PERMITTED

LOCKED
	NOT_FOUND
IO_ERROR2�

CloudPyApiCoreR
TaskInit.OCA.Cloud_Py_API.Proto.Empty%.OCA.Cloud_Py_API.Proto.TaskInitReply" [

TaskStatus,.OCA.Cloud_Py_API.Proto.TaskSetStatusRequest.OCA.Cloud_Py_API.Proto.Empty" T
TaskExit\'.OCA.Cloud_Py_API.Proto.TaskExitRequest.OCA.Cloud_Py_API.Proto.Empty" R
TaskLog&.OCA.Cloud_Py_API.Proto.TaskLogRequest.OCA.Cloud_Py_API.Proto.Empty" U
	CmdStream.OCA.Cloud_Py_API.Proto.Empty%.OCA.Cloud_Py_API.Proto.ServerCommand" 0Y
	FsGetInfo%.OCA.Cloud_Py_API.Proto.FsListRequest#.OCA.Cloud_Py_API.Proto.FsListReply" V
FsList%.OCA.Cloud_Py_API.Proto.FsListRequest#.OCA.Cloud_Py_API.Proto.FsListReply" X
FsRead%.OCA.Cloud_Py_API.Proto.FsReadRequest#.OCA.Cloud_Py_API.Proto.FsReadReply" 0V
FsCreate\'.OCA.Cloud_Py_API.Proto.FsCreateRequest.OCA.Cloud_Py_API.Proto.FsReply" V
FsWrite&.OCA.Cloud_Py_API.Proto.FsWriteRequest.OCA.Cloud_Py_API.Proto.FsReply" (V
FsDelete\'.OCA.Cloud_Py_API.Proto.FsDeleteRequest.OCA.Cloud_Py_API.Proto.FsReply" R
FsMove%.OCA.Cloud_Py_API.Proto.FsMoveRequest.OCA.Cloud_Py_API.Proto.FsReply" \\
DbSelect\'.OCA.Cloud_Py_API.Proto.DbSelectRequest%.OCA.Cloud_Py_API.Proto.DbSelectReply" \\
DbCursor\'.OCA.Cloud_Py_API.Proto.DbCursorRequest%.OCA.Cloud_Py_API.Proto.DbCursorReply" V
DbExec%.OCA.Cloud_Py_API.Proto.DbExecRequest#.OCA.Cloud_Py_API.Proto.DbExecReply" bproto3'
        , true);

        static::$is_initialized = true;
    }
}

