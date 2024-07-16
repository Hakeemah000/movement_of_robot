//*********************************************


//Codes for moving robots.

function finalPosition(move)
	{
		let l = move.length;
		let countUp = 0, countDown = 0;
		let countLeft = 0, countRight = 0;
        let countStop = 0;

		for (let i = 0; i < l; i++)
		{
		
			if (move[i] == 'forward')
				countUp++;

			else if (move[i] == 'backward')
				countDown++;

			else if (move[i] == 'left')
				countLeft++;

			else if (move[i] == 'right')
				countRight++;

            else 
            countStop;
		}
	}