readonly PROMPT_COMMAND='pwd=`pwd` && history 1 | /bin/sed "s:^  *[0-9]*  :$pwd :" | /usr/bin/logger -p local5.notice -t "$USER[$$] $SSH_CONNECTION"'
PS1='\u@\h:\w# '

alias vi='vim'

export TERM=linux
export GIT_EDITOR="vim"

if [ -f ~/.profile ]
then 
	. ~/.profile
fi
