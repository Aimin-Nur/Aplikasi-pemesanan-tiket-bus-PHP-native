<html>
<label for="">Posisi Kursi</label>
                <div class="container">
                    <div class="col-lg-12 mb-3">
                    <ol class="mt-3">
                        <li>
                            <div class="row">
                                <div class="col-lg-2">
                                    <ol class="d-flex gap-1">
                                        <li>
                                            <input type="checkbox" name="tkursi">
                                            <label for="" class="p-4">1A</label>
                                        </li>
                                        <li class="seat">
                                            <label for="" class="seat p-4">5C
                                            <input type="checkbox" value="3B" class="ms-3" name="tkursi"/>
                                            </label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-5C" value="5C" name="tkursi"/>
                                            <label for="5C" class="p-4">5C</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-7D"name="tkursi"/>
                                            <label for="7D" class="p-4">7D</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-9E" name="tkursi"/>
                                            <label for="9E" class="p-4">9E</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-11F" name="tkursi" />
                                            <label for="11F" class="p-4">11F</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-13F" name="tkursi"/>
                                            <label for="13F" class="p-4">13F</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-15F" name="tkursi"/>
                                            <label for="15F" class="p-4">15F</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-17F" name="tkursi"/>
                                            <label for="17F" class="p-4">17F</label>
                                        </li>
                                        <li class="seat">
                                            <label for="1F" class="p-4 ms-4">1F</label>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row mt-3 me-5" >
                                <div class="col-lg-2 me-3">
                                    <ol class="seats d-flex gap-1">
                                        <li class="seat d-flex">
                                            <input type="checkbox" id="seat-2A" name="tkursi"/>
                                            <label for="2A" class="p-4">2A</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-4B" class="ms-3" name="tkursi"/>
                                            <label for="4B" class="p-4 ms-3">4B</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-6C" name="tkursi"/>
                                            <label for="6C" id="seat-6C" class="p-4">6C</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-8D" name="tkursi" />
                                            <label for="8D" id="seat-8D" class="p-4">8D</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-10E" name="tkursi"/>
                                            <label for="10E" id="seat-10E" class="p-4">10E</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-12F" name="tkursi" />
                                            <label for="12F" id="seat-12F" class="p-4">12F</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-14F" name="tkursi"/>
                                            <label for="14F" id="seat-14F" class="p-4">14F</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-16F" name="tkursi" />
                                            <label for="16F" id="seat-16F" class="p-4">16F</label>
                                        </li>
                                        <li class="seat">
                                            <input type="checkbox" id="seat-18F" name="tkursi" />
                                            <label for="18F" id="seat-18F" class="p-4">18F</label>
                                        </li>
                                        <li class="seat">
                                            <label for="1F" class="p-4 ms-4">1F</label>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                    
                        
                        </li>
                        
                    </ol> 
                </div>
            </div>
</html>


<style>
    ol {
  list-style: none;
  padding: 0;
  margin: 0;

}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.size{
  padding: 30px;
}

.seat {
  display: flex;
  position: relative;
}

.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bolder;
  line-height: 1.5rem;
  padding: 4px 0;
  background:#cf1818;
  border-radius: 5px; 
  color: black; 
}

.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px green;
}

.seat:nth-child(3) {
  margin-right: 14%;
}
.seat input[type=checkbox] {
  position: absolute;
}
.seat input[type=checkbox]:checked + label {
  background: #9CFF2E;
}
</style>