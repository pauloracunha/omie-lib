<?php

namespace OmieLib\Produtos\Sat\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Sat\Request\ImportarSatRequest;
use OmieLib\Produtos\Sat\SatJsonClient;

/**
 * Resposta da importação de CF-e SAT.
 *
 * @pw_element integer $idImportacao ID da Importação.
 * @pw_element integer $idCupom Identificação do cupom fiscal.
 * @pw_element integer $idLote Identificação do lote do cupom fiscal.
 * @pw_element string $cCodStatus Código do status de processamento do cupom fiscal.<BR><BR>Se retornar 0 indica que o cupom foi processado com sucesso.<BR><BR>Se retornar um valor maior que zero indica o código do erro gerado.<BR><BR>
 * @pw_element string $cDesStatus Descrição do status de processamento.<BR><BR>Caso ocorra erro, retorna a descrição do erro gerado.<BR><BR>
 * @pw_complex ImportarSatResponse
 */
class ImportarSatResponse{
	/**
	 * ID da Importação.
	 *
	 * @var integer
	 */
	public int $idImportacao;
	/**
	 * Identificação do cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idCupom;
	/**
	 * Identificação do lote do cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idLote;
	/**
	 * Código do status de processamento do cupom fiscal.<BR><BR>Se retornar 0 indica que o cupom foi processado com sucesso.<BR><BR>Se retornar um valor maior que zero indica o código do erro gerado.<BR><BR>
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status de processamento.<BR><BR>Caso ocorra erro, retorna a descrição do erro gerado.<BR><BR>
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
