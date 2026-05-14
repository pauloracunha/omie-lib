<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Dados para atender NT 2024.003. Informações de Produtos da Agricultura, Pecuária e Produção Florestal
 *
 * @pw_element string $cNumReceita Número da receita ou receituário do agrotóxico/defensivo agrícola
 * @pw_element string $cCpfResponsavel CPF do responsá¡vel técnico legalmente habilitado
 * @pw_element integer $nTipoGuia Tipo da Guia<BR><BR>1 - Corresponde ao GTA<BR>2 - Corresponde ao TTA<BR>3 - Corresponde ao DTA<BR>4 - Corresponde ao ATV<BR>5 - Corresponde ao PTV<BR>6 - Corresponde ao GTV<BR>7 - Corresponde ao Guia Florestal (DOF, SisFlora - PA e MT, SIAM - MG)
 * @pw_element string $cUFGuia UF de emissão da Guia
 * @pw_element string $cSerieGuia Número de série da guia
 * @pw_element integer $nNumGuia Número da guia
 * @pw_complex agropecuario
 */
class Agropecuario{
	/**
	 * Número da receita ou receituário do agrotóxico/defensivo agrícola
	 *
	 * @var string
	 */
	public string $cNumReceita;
	/**
	 * CPF do responsá¡vel técnico legalmente habilitado
	 *
	 * @var string
	 */
	public string $cCpfResponsavel;
	/**
	 * Tipo da Guia<BR><BR>1 - Corresponde ao GTA<BR>2 - Corresponde ao TTA<BR>3 - Corresponde ao DTA<BR>4 - Corresponde ao ATV<BR>5 - Corresponde ao PTV<BR>6 - Corresponde ao GTV<BR>7 - Corresponde ao Guia Florestal (DOF, SisFlora - PA e MT, SIAM - MG)
	 *
	 * @var integer
	 */
	public int $nTipoGuia;
	/**
	 * UF de emissão da Guia
	 *
	 * @var string
	 */
	public string $cUFGuia;
	/**
	 * Número de série da guia
	 *
	 * @var string
	 */
	public string $cSerieGuia;
	/**
	 * Número da guia
	 *
	 * @var integer
	 */
	public int $nNumGuia;
}
