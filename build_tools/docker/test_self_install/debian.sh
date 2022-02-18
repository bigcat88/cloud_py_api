#!/bin/sh

ECHO_LINE_BREAK="echo -----------------------------------------------------"
FRM_CONFIG="%7B%22loglvl%22%3A%22DEBUG%22%2C%22frmAppData%22%3A%22%2Fcloud_py_api%22%2C%22dbConfig%22%3A%7B%22dbType%22%3A%22pgsql%22%2C%22dbUser%22%3A%22%22%2C%22dbName%22%3A%22nextcloud%22%7D%7D"
DUMP_FOLDERS="ls -la /cloud_py_api && ls -la /cloud_py_api/.local && ls -la /var/www"
CLEAR_FOLDERS="rm -rf /cloud_py_api/.local"

cp -r host/home/runner/work/cloud_py_api/cloud_py_api/pyfrm /
if [ -d "/cloud_py_api/st_python" ]; then
  echo "Python standalone present, checking on it."
  if ! /cloud_py_api/st_python/bin/python3 /pyfrm/install.py --config "$FRM_CONFIG" --check --target framework --dev; then
    $DUMP_FOLDERS
    $ECHO_LINE_BREAK && echo "Installing" && $ECHO_LINE_BREAK
    /cloud_py_api/st_python/bin/python3 /pyfrm/install.py --config "$FRM_CONFIG" --install --target framework --dev || exit 101
  fi
  $DUMP_FOLDERS && $CLEAR_FOLDERS
elif ! python3 -V; then
  echo "System or Standalone python not found. Test failed." && exit 102
fi
if python3 -V; then
  echo "Checking on system python as user."
  if ! sudo -H -u www-data python3 /pyfrm/install.py --config "$FRM_CONFIG" --check --target framework --dev; then
    $DUMP_FOLDERS
    $ECHO_LINE_BREAK && echo "Installing" && $ECHO_LINE_BREAK
    sudo -H -u www-data python3 /pyfrm/install.py --config "$FRM_CONFIG" --install --target framework --dev || exit 101
  fi
  $DUMP_FOLDERS && $CLEAR_FOLDERS
  echo "Checking on system python as root."
  if ! python3 /pyfrm/install.py --config "$FRM_CONFIG" --check --target framework --dev; then
    $DUMP_FOLDERS
    $ECHO_LINE_BREAK && echo "Installing" && $ECHO_LINE_BREAK
    python3 /pyfrm/install.py --config "$FRM_CONFIG" --install --target framework --dev || exit 101
  fi
  $DUMP_FOLDERS && $CLEAR_FOLDERS
fi
echo "Test OK."
exit 0
