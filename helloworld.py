gate = open("gate.txt","r")
gateState = gate.read()
gate.close()

gate = open("gate.txt", "w")
if gateState == "opened":
    gate.write("closed")
else:
    gate.write("opened")
gate.close()
