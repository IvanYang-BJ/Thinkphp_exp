DELIMITER //
CREATE PROCEDURE proc4()
begin
  declare var int;

  set var = 0;
  while var<10 do
     insert into think_user(name,age,address) values('asdf',2342,'afdsadsfad');
     set var = var+1;
  end while;
end;


//Mysql Procedure 调用方法
CALL `thinkphp`.`proc4`();