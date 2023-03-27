
/*VERSAO 2 23062021*/

def var vacao as char.
def var vws as char.
def var ventrada as longchar.
def var vtmp    as char.
vws         = os-getenv("ws").
vacao       = os-getenv("acao").
ventrada    = os-getenv("entrada").
vtmp    = os-getenv("tmp").
if vtmp = ? then vtmp = "./".


if vacao <> ?
then do:
    if search(vacao + ".p") <> ?
    then  run value(vacao + ".p") ( ventrada, vtmp).



return.
