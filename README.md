# slidocli

Command line utility to list available questions on sli.do and
automatically upvote any question specified by their id.

```

            ██████  ██▓     ██▓▓█████▄  ▒█████   ▄████▄   ██▓     ██▓
          ▒██    ▒ ▓██▒    ▓██▒▒██▀ ██▌▒██▒  ██▒▒██▀ ▀█  ▓██▒    ▓██▒
          ░ ▓██▄   ▒██░    ▒██▒░██   █▌▒██░  ██▒▒▓█    ▄ ▒██░    ▒██▒
            ▒   ██▒▒██░    ░██░░▓█▄   ▌▒██   ██░▒▓▓▄ ▄██▒▒██░    ░██░
          ▒██████▒▒░██████▒░██░░▒████▓ ░ ████▓▒░▒ ▓███▀ ░░██████▒░██░
          ▒ ▒▓▒ ▒ ░░ ▒░▓  ░░▓   ▒▒▓  ▒ ░ ▒░▒░▒░ ░ ░▒ ▒  ░░ ▒░▓  ░░▓
          ░ ░▒  ░ ░░ ░ ▒  ░ ▒ ░ ░ ▒  ▒   ░ ▒ ▒░   ░  ▒   ░ ░ ▒  ░ ▒ ░
          ░  ░  ░    ░ ░    ▒ ░ ░ ░  ░ ░ ░ ░ ▒  ░          ░ ░    ▒ ░
                ░      ░  ░ ░     ░        ░ ░  ░ ░          ░  ░ ░
                                ░               ░
```


## Usage
```
USAGE: slidocli [-v] [-d] [-q question-id] SLIDO-URL
       slidocli -h

DESCRIPTION:
  Command line utility to list available questions on sli.do and
  automatically upvote any question specified by their id.
  If only the SLIDO-URL is specified, this tool lists available questions
  and their according ids. To upvote a question, use -q.

ARGUMENTS:
  -v               Be verbose: show curl requests.
  -d               Dump curl output to file for later inspection.
  -q question-id   The question to upvote.

DISCLAIMER:
  This tool is for educational purposes only and must not be used to
  upvote any questions on sli.do, as it most likely violates their
  terms  and services. Use at your own risk.
  https://www.sli.do/acceptable-use

EXAMPLES:
  List all questions of an event:
  $ slidocli https://app.sli.do/event/abcdef123

  Upvote a specific question of an event:
  $ slidocli -q '1234567' https://app.sli.do/event/abcdef123

  Upvote 3 times:
  $ for i in `seq 3`; do slidocli -q '1234567' https://app.sli.do/event/abcdef123; done

  Upvote 3 times with 10 sec break in between:
  $ for i in `seq 3`; do slidocli -q '1234567' https://app.sli.do/event/abcdef123; sleep 10; done
```


## Examples

### List questions
```
$ slidocli https://app.sli.do/event/abcdef123

            ██████  ██▓     ██▓▓█████▄  ▒█████   ▄████▄   ██▓     ██▓
          ▒██    ▒ ▓██▒    ▓██▒▒██▀ ██▌▒██▒  ██▒▒██▀ ▀█  ▓██▒    ▓██▒
          ░ ▓██▄   ▒██░    ▒██▒░██   █▌▒██░  ██▒▒▓█    ▄ ▒██░    ▒██▒
            ▒   ██▒▒██░    ░██░░▓█▄   ▌▒██   ██░▒▓▓▄ ▄██▒▒██░    ░██░
          ▒██████▒▒░██████▒░██░░▒████▓ ░ ████▓▒░▒ ▓███▀ ░░██████▒░██░
          ▒ ▒▓▒ ▒ ░░ ▒░▓  ░░▓   ▒▒▓  ▒ ░ ▒░▒░▒░ ░ ░▒ ▒  ░░ ▒░▓  ░░▓
          ░ ░▒  ░ ░░ ░ ▒  ░ ▒ ░ ░ ▒  ▒   ░ ▒ ▒░   ░  ▒   ░ ░ ▒  ░ ▒ ░
          ░  ░  ░    ░ ░    ▒ ░ ░ ░  ░ ░ ░ ░ ▒  ░          ░ ░    ▒ ░
                ░      ░  ░ ░     ░        ░ ░  ░ ░          ░  ░ ░
                                ░               ░

          Use at your own risk and adhere to sli.do terms and services

                                v0.1 (2019-09-13)
                       https://github.com/cytopia/slidocli
                                   By cytopia

░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░


                                  INITIALIZING

Request URL:     https://app.sli.do/event/abcdef123
Slido URL:       https://app.sli.do/event/abcdef123
Slido hash:      abcdef123
Random UA:       Mozilla/5.0 (Linux; U; Android-4.0.3; en-us; Galaxy Nexus Buil...
Random DNT:      1
Cookie path:     /tmp/tmp.dUC38JcZ12
Dump path:       not set

                              GATHERING EVENT DATA

Slido event URL: https://app.sli.do/api/v0.5/events?hash=abcdef123
Name:            Name of the room
Code:            AB123
Event ID:        12345678
Event Group ID:  333333
UUID:            xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxx

                               AUTHENTICATING USER

Slido auth URL:  https://app.sli.do/api/v0.5/events/xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxx/auth
Acess Token:     yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
Event User ID:   44444444

                              AUTHENTICATING EVENT

Slido auth URL:  https://app.sli.do/api/v0.5/events/xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxx
Event Sect ID:   1234567
Room:            Room 1

                                LISTING QUESTIONS

[
  "aaaaaaa",
  "26",
  "I like sli.do, do others use it as well?"
]
[
  "bbbbbbb",
  "13",
  "Do I like sli.do the most?"
]
```

### Upvote a question
```
$ slidocli -q 'aaaaaaa' https://app.sli.do/event/abcdef123

            ██████  ██▓     ██▓▓█████▄  ▒█████   ▄████▄   ██▓     ██▓
          ▒██    ▒ ▓██▒    ▓██▒▒██▀ ██▌▒██▒  ██▒▒██▀ ▀█  ▓██▒    ▓██▒
          ░ ▓██▄   ▒██░    ▒██▒░██   █▌▒██░  ██▒▒▓█    ▄ ▒██░    ▒██▒
            ▒   ██▒▒██░    ░██░░▓█▄   ▌▒██   ██░▒▓▓▄ ▄██▒▒██░    ░██░
          ▒██████▒▒░██████▒░██░░▒████▓ ░ ████▓▒░▒ ▓███▀ ░░██████▒░██░
          ▒ ▒▓▒ ▒ ░░ ▒░▓  ░░▓   ▒▒▓  ▒ ░ ▒░▒░▒░ ░ ░▒ ▒  ░░ ▒░▓  ░░▓
          ░ ░▒  ░ ░░ ░ ▒  ░ ▒ ░ ░ ▒  ▒   ░ ▒ ▒░   ░  ▒   ░ ░ ▒  ░ ▒ ░
          ░  ░  ░    ░ ░    ▒ ░ ░ ░  ░ ░ ░ ░ ▒  ░          ░ ░    ▒ ░
                ░      ░  ░ ░     ░        ░ ░  ░ ░          ░  ░ ░
                                ░               ░

          Use at your own risk and adhere to sli.do terms and services

                                v0.1 (2019-09-13)
                       https://github.com/cytopia/slidocli
                                   By cytopia

░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░


                                  INITIALIZING

Request URL:     https://app.sli.do/event/abcdef123
Slido URL:       https://app.sli.do/event/abcdef123
Slido hash:      abcdef123
Random UA:       Mozilla/5.0 (Linux; U; Android-4.0.3; en-us; Galaxy Nexus Buil...
Random DNT:      1
Cookie path:     /tmp/tmp.dUC38JcZ12
Dump path:       not set

                              GATHERING EVENT DATA

Slido event URL: https://app.sli.do/api/v0.5/events?hash=abcdef123
Name:            Name of the room
Code:            AB123
Event ID:        12345678
Event Group ID:  333333
UUID:            xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxx

                               AUTHENTICATING USER

Slido auth URL:  https://app.sli.do/api/v0.5/events/xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxx/auth
Acess Token:     yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
Event User ID:   44444444

                                    UPVOTING

Voted question:  aaaaaaa
New score:       27
```


## Web interface

There are also two web interfaces available which make it easier to use it from mobile phones or
tablets. Find them here: [www1](www1/README.md) (more geeky) and [www2](www2/README.md) (more usable).

In order to quickly spin them up, you can use the bundled [Docker Compose setup](docker/README.md).


## Deploy on AWS with Terraform

Just for the sake... the whole stack can also be deployed easily on AWS. Check the bundled
[Terraform module](terraform/README.md)


## Disclaimer

This tool is for educational purposes only and must not be used to
upvote any questions on sli.do, as it most likely violates their
terms  and services. Use at your own risk.
https://www.sli.do/acceptable-use


## License

**[MIT License](LICENSE)**

Copyright (c) 2019 [cytopia](https://github.com/cytopia)
