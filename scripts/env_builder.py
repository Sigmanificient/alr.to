with open('server/.env') as env:
    content = env.read().split('\n')

env_kv = [
    line.split('=')
    for line in content
    if line
]

env_values = ', '.join(
    f"'{k}' => '{v}'"
    for k, v in env_kv

)

env = """
<?php

$env = array({});
"""

with open('server/cache/env.php', 'w') as f:
    f.write(env.format(env_values))
